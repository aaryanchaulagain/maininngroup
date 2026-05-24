<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::getConnection()->getDriverName() !== 'sqlite') {
            return;
        }

        $this->rebuildArticles();
        $this->rebuildContacts();
        $this->rebuildFaqs();
        $this->rebuildPageContents();
        $this->rebuildTestimonials();
        $this->rebuildTeams();
    }

    public function down(): void
    {
        // Irreversible on SQLite without data loss; re-run migrate:fresh if needed.
    }

    protected function rebuildArticles(): void
    {
        if (! Schema::hasTable('articles')) {
            return;
        }

        $this->rebuildTable('articles', function (Blueprint $table) {
            $table->id();
            $table->string('source_domain', 32)->default('loan');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('body')->nullable();
            $table->string('image')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    protected function rebuildContacts(): void
    {
        if (! Schema::hasTable('contacts')) {
            return;
        }

        $this->rebuildTable('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('message');
            $table->string('source_domain', 32);
            $table->string('status', 32)->default('pending');
            $table->timestamp('approved_at')->nullable();
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    protected function rebuildFaqs(): void
    {
        if (! Schema::hasTable('faqs')) {
            return;
        }

        $this->rebuildTable('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('source_domain', 32)->default('loan');
            $table->string('question');
            $table->text('answer');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    protected function rebuildPageContents(): void
    {
        if (! Schema::hasTable('page_contents')) {
            return;
        }

        $this->rebuildTable('page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('source_domain', 32);
            $table->string('section');
            $table->string('key');
            $table->longText('value')->nullable();
            $table->string('type')->default('text');
            $table->timestamps();
            $table->unique(['source_domain', 'section', 'key']);
        });
    }

    protected function rebuildTestimonials(): void
    {
        if (! Schema::hasTable('testimonials')) {
            return;
        }

        $this->rebuildTable('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('source_domain', 32)->default('loan');
            $table->string('title');
            $table->text('quote');
            $table->string('author');
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    protected function rebuildTeams(): void
    {
        if (! Schema::hasTable('teams')) {
            return;
        }

        $hasSlug = Schema::hasColumn('teams', 'slug');

        $this->rebuildTable('teams', function (Blueprint $table) use ($hasSlug) {
            $table->id();
            $table->string('source_domain', 32);
            $table->string('name');
            if ($hasSlug) {
                $table->string('slug')->nullable();
                $table->string('title_label')->nullable();
            }
            $table->string('role')->nullable();
            $table->text('bio')->nullable();
            $table->string('photo')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            if ($hasSlug) {
                $table->string('office_phone', 50)->nullable();
            }
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
            if ($hasSlug) {
                $table->unique(['source_domain', 'slug']);
            }
        });
    }

    protected function rebuildTable(string $table, callable $define): void
    {
        $backup = "{$table}_domain_fix_backup";

        if (Schema::hasTable($table) && Schema::hasTable($backup)) {
            Schema::drop($backup);
        }

        $source = $table;

        if (! Schema::hasTable($table) && Schema::hasTable($backup)) {
            $source = $backup;
        } elseif (! Schema::hasTable($table)) {
            return;
        } else {
            Schema::rename($table, $backup);
            $source = $backup;
        }

        $this->dropIndexesForTable($source);
        $this->dropOrphanIndexes($table);

        Schema::create($table, $define);

        $columns = array_values(array_intersect(
            Schema::getColumnListing($table),
            Schema::getColumnListing($source)
        ));

        if ($columns !== []) {
            $quoted = implode(', ', array_map(fn (string $c) => "\"{$c}\"", $columns));
            DB::statement("INSERT INTO \"{$table}\" ({$quoted}) SELECT {$quoted} FROM \"{$source}\"");
            $this->syncSqliteSequence($table);
        }

        if ($source === $backup && Schema::hasTable($backup)) {
            Schema::drop($backup);
        }
    }

    protected function dropOrphanIndexes(string $table): void
    {
        $indexes = DB::select(
            "SELECT name FROM sqlite_master WHERE type = 'index' AND name LIKE ?",
            [$table.'%']
        );

        foreach ($indexes as $index) {
            DB::statement('DROP INDEX IF EXISTS "'.$index->name.'"');
        }
    }

    protected function dropIndexesForTable(string $table): void
    {
        $indexes = DB::select(
            "SELECT name FROM sqlite_master WHERE type = 'index' AND tbl_name = ? AND name NOT LIKE 'sqlite_autoindex_%'",
            [$table]
        );

        foreach ($indexes as $index) {
            DB::statement('DROP INDEX IF EXISTS "'.$index->name.'"');
        }
    }

    protected function syncSqliteSequence(string $table): void
    {
        $max = DB::table($table)->max('id');

        if ($max === null) {
            return;
        }

        $exists = DB::table('sqlite_sequence')->where('name', $table)->exists();

        if ($exists) {
            DB::table('sqlite_sequence')->where('name', $table)->update(['seq' => $max]);
        } else {
            DB::table('sqlite_sequence')->insert(['name' => $table, 'seq' => $max]);
        }
    }
};
