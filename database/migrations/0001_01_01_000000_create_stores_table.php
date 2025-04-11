<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('slug')->unique();

            // SEO Fields
            $table->string("seoTitle")->nullable();
            $table->text("seoDescription")->nullable(); // Text allows longer content
            $table->text("seoKeyword")->nullable();     // Text for multiple keywords
            $table->string("canonicalUrl")->nullable(); // Prevent duplicate content
            $table->string("metaRobots")->nullable();   // Allow custom indexing rules

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pin')->nullable();
            $table->string('logo')->nullable();
            $table->string("storeImage")->nullable();
            $table->string('status')->default('active');
            $table->string("mapsUrl")->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
