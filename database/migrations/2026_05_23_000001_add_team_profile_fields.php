<?php

use App\Models\Team;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
            $table->string('title_label')->nullable()->after('slug');
            $table->string('office_phone', 50)->nullable()->after('phone');
        });

        foreach (Team::query()->whereNull('slug')->orWhere('slug', '')->get() as $team) {
            $team->slug = Team::uniqueSlug($team->name, $team->source_domain, $team->id);
            $team->saveQuietly();
        }

        Schema::table('teams', function (Blueprint $table) {
            $table->unique(['source_domain', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropUnique(['source_domain', 'slug']);
            $table->dropColumn(['slug', 'title_label', 'office_phone']);
        });
    }
};
