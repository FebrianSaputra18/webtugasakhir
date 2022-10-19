<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Sales;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buatlaporankaryawans', function (Blueprint $table) {
            $table->id();
            $table->string('bawa100gr');
            $table->string('laku100gr');
            $table->string('uang100gr');
            $table->string('keterangan100gr');
            $table->string('bawa50gr');
            $table->string('laku50gr');
            $table->string('uang50gr');
            $table->string('keterangan50gr');
            $table->string('bawabumbu');
            $table->string('lakubumbu');
            $table->string('uangbumbu');
            $table->string('keteranganbumbu');
            $table->string('bawapecel');
            $table->string('lakupecel');
            $table->string('uangpecel');
            $table->string('keteranganpecel');
            $table->string('bawasantan');
            $table->string('lakusantan');
            $table->string('uangsantan');
            $table->string('keterangansantan');
            $table->string('bawagaram');
            $table->string('lakugaram');
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
        Schema::dropIfExists('buatlaporankaryawans');
    }
};
