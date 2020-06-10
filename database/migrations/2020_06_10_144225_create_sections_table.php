<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('page_id')->index();
            $table->foreign('page_id')->references('id')->on('Pages')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('button_text');
            $table->string('link')->nullable();
            $table->boolean('has_file')->default(false);
            $table->string('file')->nullable();
            $table->boolean('has_article')->default(false);
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
        Schema::dropIfExists('sections');
    }
}
