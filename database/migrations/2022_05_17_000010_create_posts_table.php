<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_url');
            $table->string('slug');
            $table->string('summary', 100);
            $table->longText('text');
            $table->foreignId('office_id')->constrained();
            $table->boolean('is_published')->default('0');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.%.
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
