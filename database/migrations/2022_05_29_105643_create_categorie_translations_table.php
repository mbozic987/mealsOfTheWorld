<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();
            
            $table->foreignId('categorie_id');
            $table->unique(['categorie_id', 'locale']);
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_translations');
    }
}
