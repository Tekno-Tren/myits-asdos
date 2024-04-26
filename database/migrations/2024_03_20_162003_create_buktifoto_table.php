<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuktifotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buktifoto', function (Blueprint $table) {
            $table->id();
            $table->string('filename', 100);
            $table->string('original_name', 1000);
            $table->string('file_path', 1000);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pertemuan_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('buktifoto');
    }
}
