<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpTermmetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_termmeta', function (Blueprint $table) {
            $table->bigInteger('meta_id', true)->unsigned();
            $table->bigInteger('term_id')->unsigned()->default(0)->index('term_id');
            $table->string('meta_key')->nullable()->index();
            $table->longText('meta_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wp_termmeta');
    }
}
