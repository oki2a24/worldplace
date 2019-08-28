<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPasswordToWpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wp_users', function (Blueprint $table) {
            $table->string('user_pass')->comment('WordPress でパスワードを扱うために使用していたこのカラムは WorldPlace では使用しない。')->change();
            $table->string('password')->comment('WorldPlace ではこのカラムでパスワードを扱う。');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wp_users', function (Blueprint $table) {
            $table->string('user_pass')->comment('')->change();
            $table->dropColumn('password');
        });
    }
}
