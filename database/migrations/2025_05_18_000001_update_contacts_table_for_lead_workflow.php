<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            if (Schema::hasColumn('contacts', 'read')) {
                $table->dropColumn('read');
            }
        });

        Schema::table('contacts', function (Blueprint $table) {
            if (! Schema::hasColumn('contacts', 'status')) {
                $table->enum('status', ['pending', 'approved'])->default('pending')->after('source_domain');
            }
            if (! Schema::hasColumn('contacts', 'approved_at')) {
                $table->timestamp('approved_at')->nullable()->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['status', 'approved_at']);
            $table->boolean('read')->default(false);
        });
    }
};
