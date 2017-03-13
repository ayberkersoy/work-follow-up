<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscoveryContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discovery_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discovery_id');
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
        Schema::dropIfExists('discovery_contents');
    }
}
