<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_translations', function (Blueprint $table) {
            // mandatory fields
            $table->bigIncrements('id');
            $table->string('locale')->index();


            // Foreign key to the main model
            $table->foreignId('meal_id');
            $table->unique(['meal_id', 'locale']);
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');

            // Actual fields you want to translate
            $table->string('title');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_translations');
    }
}
