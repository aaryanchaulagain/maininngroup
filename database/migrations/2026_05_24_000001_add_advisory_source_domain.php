<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $driver = Schema::getConnection()->getDriverName();

        if ($driver === 'sqlite') {
            // Handled by 2026_05_25_000001_fix_sqlite_source_domain_for_advisory (string column, no CHECK).
            return;
        }

        if ($driver !== 'mysql') {
            return;
        }

        $this->extendEnum('contacts', 'source_domain', ['main', 'tax', 'loan', 'advisory']);
        $this->extendEnum('articles', 'source_domain', ['main', 'tax', 'loan', 'advisory']);
        $this->extendEnum('faqs', 'source_domain', ['main', 'tax', 'loan', 'advisory']);
        $this->extendEnum('page_contents', 'source_domain', ['main', 'tax', 'loan', 'advisory']);
        $this->extendEnum('testimonials', 'source_domain', ['main', 'tax', 'loan', 'advisory']);
        $this->extendEnum('teams', 'source_domain', ['tax', 'loan', 'advisory']);
    }

    public function down(): void
    {
        if (Schema::getConnection()->getDriverName() !== 'mysql') {
            return;
        }

        $this->extendEnum('contacts', 'source_domain', ['main', 'tax', 'loan']);
        $this->extendEnum('articles', 'source_domain', ['main', 'tax', 'loan']);
        $this->extendEnum('faqs', 'source_domain', ['main', 'tax', 'loan']);
        $this->extendEnum('page_contents', 'source_domain', ['main', 'tax', 'loan']);
        $this->extendEnum('testimonials', 'source_domain', ['main', 'tax', 'loan']);
        $this->extendEnum('teams', 'source_domain', ['tax', 'loan']);
    }

    protected function extendEnum(string $table, string $column, array $values): void
    {
        $list = "'".implode("','", $values)."'";
        DB::statement("ALTER TABLE `{$table}` MODIFY `{$column}` ENUM({$list}) NOT NULL");
    }
};
