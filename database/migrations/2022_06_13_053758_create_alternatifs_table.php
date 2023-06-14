<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('C1');
            $table->string('C2');
            $table->double('C3');
            $table->double('C4');
            $table->double('C5');
            $table->double('C6');
            $table->double('C7');
            $table->double('C8');
            $table->double('C9');
            $table->double('C10');
            $table->double('C11');
            $table->double('C12');
            $table->integer('kriteria_id')->nullable();
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
        Schema::dropIfExists('alternatifs');
    }
}
