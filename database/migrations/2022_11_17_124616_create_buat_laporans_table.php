<?php

use App\Models\User;
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
        Schema::create('buat_laporans', function (Blueprint $table) {
            $table->id();
            $table->string('nonota');
            // 100gr
            $table->string('bawa100gr');
            $table->string('uang100gr');
            $table->string('keterangan100gr');
            // 50gr
            $table->string('bawa50gr');
            $table->string('uang50gr');
            $table->string('keterangan50gr');
            //bumbu
            $table->string('bawabumbu');
            $table->string('uangbumbu');
            $table->string('keteranganbumbu');
            //santan
            $table->string('bawasantan');
            $table->string('uangsantan');
            $table->string('keterangansantan');
            //pecel
            $table->string('bawapecel');
            $table->string('uangpecel');
            $table->string('keteranganpecel');
            //garam
            $table->string('bawagaram');
            $table->string('uanggaram');
            $table->string('keterangangaram');
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
        Schema::dropIfExists('buat_laporans');
    }
};
