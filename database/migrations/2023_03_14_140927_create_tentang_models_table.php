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
        Schema::create('tentang_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 64);
            $table->string('image', 64);
            $table->string('email1', 64);
            $table->string('email2', 64)->nullable();
            $table->string('telp1', 64);
            $table->string('telp2', 64)->nullable();
            $table->string('alamat', 64)->nullable();
            $table->string('kecamatan', 64)->nullable();
            $table->string('Provinsi', 64)->nullable();
            $table->unsignedBigInteger('user_created')->nullable();
            $table->foreign('user_created')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tentang_models');
    }
};
