<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreatePostsTable extends Migration
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
            $table->id();
            $table->string('title');
            $table->string('image_url');
            $table->string('slug');
            $table->string('summary')->virtualAs(new Expression("CONCAT(SUBSTRING(content, 1, 100), '...')"));
            $table->longText('content');
            $table->foreignId('office_id')->constrained();
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
