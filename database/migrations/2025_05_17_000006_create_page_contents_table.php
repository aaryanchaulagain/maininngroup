<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->enum('source_domain', ['main', 'tax', 'loan']);
            $table->string('section');
            $table->string('key');
            $table->longText('value')->nullable();
            $table->string('type')->default('text');
            $table->timestamps();

            $table->unique(['source_domain', 'section', 'key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_contents');
    }
};
