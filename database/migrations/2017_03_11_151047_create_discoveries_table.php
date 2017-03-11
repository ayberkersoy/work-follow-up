<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscoveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discoveries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dis_category_id');
            $table->integer('project_id');
            $table->string('job');
            $table->string('description');
            $table->string('amount');
            $table->string('unit');
            $table->string('unit_price');
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
        Schema::dropIfExists('discoveries');
    }
}
