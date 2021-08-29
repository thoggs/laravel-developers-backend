<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDevelopersTable extends Migration
{
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('sexo', 1);
            $table->integer('idade');
            $table->string('hobby');
            $table->date('datanascimento');
        });
    }

    public function down()
    {
        Schema::dropIfExists('developers');
    }
}
