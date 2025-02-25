<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_posts', function (Blueprint $table) {
            $table->bigInteger('ID', true)->unsigned();
            $table->bigInteger('post_author')->unsigned()->default(0)->index('post_author');
            $table->dateTime('post_date')->default('0001-01-01 00:00:00');
            $table->dateTime('post_date_gmt')->default('0001-01-01 00:00:00');
            $table->text('post_content');
            $table->text('post_title');
            $table->text('post_excerpt');
            $table->string('post_status', 20)->default('publish');
            $table->string('comment_status', 20)->default('open');
            $table->string('ping_status', 20)->default('open');
            $table->string('post_password')->default('');
            $table->string('post_name', 200)->default('')->index('post_name');
            $table->text('to_ping');
            $table->text('pinged');
            $table->dateTime('post_modified')->default('0001-01-01 00:00:00');
            $table->dateTime('post_modified_gmt')->default('0001-01-01 00:00:00');
            $table->longText('post_content_filtered');
            $table->bigInteger('post_parent')->unsigned()->default(0)->index('post_parent');
            $table->string('guid')->default('');
            $table->integer('menu_order')->default(0);
            $table->string('post_type', 20)->default('post');
            $table->string('post_mime_type', 100)->default('');
            $table->bigInteger('comment_count')->default(0);
            $table->index(['post_type', 'post_status', 'post_date', 'ID'], 'type_status_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wp_posts');
    }
}
