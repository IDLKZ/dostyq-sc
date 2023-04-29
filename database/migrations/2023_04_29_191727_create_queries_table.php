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
        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('middlename')->nullable();
            $table->date('birthday')->nullable();
            $table->string('country');
            $table->string('iin')->unique();
            $table->string('number_card_id')->nullable()->unique();
            $table->date('date_card_id')->nullable();
            $table->text('address');
            $table->string('email');
            $table->string('phone');
            $table->string('photo_url');
            $table->string('photo_card_url');
            $table->string('photo_diploma_url');
            $table->string('reference_075_url');
            $table->unsignedBigInteger('eps_id');
            $table->foreign('eps_id')->references('id')->on('eps');
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id')->references('id')->on('education_languages');
            $table->unsignedBigInteger('education_type_id');
            $table->foreign('education_type_id')->references('id')->on('education_types');
            $table->unsignedBigInteger('education_form_id');
            $table->foreign('education_form_id')->references('id')->on('education_form');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queries');
    }
};
