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
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->longText('categoryDescription')->nullable();
            $table->string('categoryPageSubHeading')->nullable();
            $table->string('categoryPageMainHeading')->nullable();
            $table->string('categoryPageContentImageUrl')->nullable();
            $table->string('categoryAdditionalFileUrl')->nullable();
            $table->string('categoryPageHeroImage')->nullable();
            $table->boolean('isActive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
};
