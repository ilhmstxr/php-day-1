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
        // Schema::create('kontak', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('id_siswa');
        //     $table->foreign('id_siswa')->references('id')->on('siswa');
        //     $table->unsignedBigInteger('id_jenis');
        //     $table->foreign('id_jenis')->references('id')->on('jenis_kontak');
        //     $table->char('deskripsi');
        //     $table->timestamps();
        // });

        Schema::create('jenis_kontak_siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswa')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->BigInteger('jenis_kontak_id')->unsigned();
            $table->foreign('jenis_kontak_id')->references('id')->on('jenis_kontak')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->char('deskripsi');
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
        Schema::dropIfExists('kontak');
    }
};
