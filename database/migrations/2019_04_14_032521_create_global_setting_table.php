<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('slug');
            $table->string('company_phone')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_googleplus')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_copyright');
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
        Schema::dropIfExists('global_setting');
    }
}
