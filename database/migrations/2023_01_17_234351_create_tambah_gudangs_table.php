<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_gudangs', function (Blueprint $table) {
            $table->id();
            $table->string('tepung50gr');
            $table->string('tepung100gr');
            $table->string('pecel');
            $table->string('santan');
            $table->string('bumbu');
            $table->string('garam');
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
        Schema::dropIfExists('tambah_gudangs');
    }
};
