<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('intro');
            $table->longText('content');
            $table->longText('raw_html');
            $table->string('image')->nullable();
            $table->string('button_text')->nullable();
            $table->string('link')->nullable();
            $table->boolean('has_file')->default(false);
            $table->string('file');
            $table->string('icon')->nullable();
            $table->unsignedBigInteger('section_id')->index();
            $table->foreign('section_id')->references('id')->on('Sections')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
