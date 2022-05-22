<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('complete_name');
            $table->string('code_name');
            $table->timestamps();
        });

        #Schema::table('posts', function (Blueprint $table) {
        #$table->foreign('user_id')->references('id')->on('users');
        #$table->foreign('office_id')->references('id')->on('offices');
        #});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            #$table->dropForeign('posts_office_id_foreign');
            #$table->dropForeign('posts_user_id_foreign');

            $table->dropColumn('office_id');
            $table->dropColumn('user_id');
        });

        Schema::dropIfExists('offices');
    }
}
