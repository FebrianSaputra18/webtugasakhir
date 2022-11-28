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
        Schema::table('buat_laporans', function (Blueprint $table) {
            $sales = User::where('role', 2)->first();
            $idsales = 1;
            if ($sales) {
                $idsales = $sales->id;
            }
            $table->bigInteger('user_id')->default($idsales)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buat_laporans', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
