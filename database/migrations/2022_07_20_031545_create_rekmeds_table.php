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
        Schema::create('rekmeds', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekmed')->unique();
            $table->string('niks_id');
            $table->date('tanggal_berobat');
            $table->string('dianogsa');
            $table->string('kode_obat');
            $table->string('transaksi');
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
        Schema::dropIfExists('rekmeds');
    }
};
