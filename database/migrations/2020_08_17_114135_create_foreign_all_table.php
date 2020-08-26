<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->bigInteger('status')->unsigned()->change();
            $table->foreign('status')->references('status_id')->on('status_reference');

        });
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->bigInteger('status')->unsigned()->change();
            $table->foreign('status')->references('status_id')->on('status_reference');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('status')->after('password')->unsigned()->change();
            $table->foreign('status')->references('status_id')->on('status_reference');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
}
