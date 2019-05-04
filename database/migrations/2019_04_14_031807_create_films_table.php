<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('title_eng')->unique()->nullable();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('avatar');
            $table->text('content');
            $table->dateTime('release_date');
            $table->integer('run_time')->nullable();
            $table->string('quality')->nullable();
            $table->string('resolution')->nullable();
            $table->string('language')->nullable();
            $table->smallInteger('viewed')->default(0);
            $table->string('distributor')->nullable();
            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')
                ->references('id')
                ->on('directors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('films');
    }
}
