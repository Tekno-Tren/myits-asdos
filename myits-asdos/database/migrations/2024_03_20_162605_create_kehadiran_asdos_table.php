<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiranAsdosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadiran_asdos', function (Blueprint $table) {
            $table->id();
            $table->string('status_kehadiran')->nullable();
            $table->unsignedBigInteger('bukti_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('pertemuan_id')->nullable();
            $table->timestamps();

            $table->foreign('bukti_id')->references('id')->on('buktifoto')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('pertemuan_id')->references('id')->on('pertemuan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadiran_asdos');
    }
}

