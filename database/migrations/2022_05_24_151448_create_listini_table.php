<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListiniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listini', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_pizza');
            $table->float('price');
            $table->boolean('is_celiaca');
            $table->boolean('is_senza_lattosio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listini');
    }
}
