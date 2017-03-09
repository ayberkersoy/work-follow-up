<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explorations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('category_id');
            $table->integer('ex_content_id');
            $table->integer('note_id');
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
        Schema::dropIfExists('explorations');
    }
}
