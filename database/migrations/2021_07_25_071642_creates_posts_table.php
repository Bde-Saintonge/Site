<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreatesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('summary')->virtualAs(new Expression("CONCAT(SUBSTRING(content, 1, 100), '...')"));
            $table->longText('content');
            $table->integer('office_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('is_published')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.%
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('posts');
    }
}
