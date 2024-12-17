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
        Schema::create('customer_supports', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('company')->nullable();
            $table->string('subject');
            $table->longText('message')->nullable();
            $table->string('supportType');
            $table->date('appointmentDate')->nullable();
            $table->date('dateCreated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_supports');
    }
};
