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
        Schema::create('armada', function (Blueprint $table) {
            $table->id();
            $table->string('image', 64);
            $table->string('merk', 64);
            $table->string('model', 64);
            $table->string('layanan', 64)->nullable();
            $table->double('harga_12')->nullable();
            $table->double('harga_12_all')->nullable();
            $table->double('harga_full')->nullable();
            $table->double('harga_full_all');
            $table->string('tagline1',64)->nullable();
            $table->string('tagline2',64)->nullable();
            $table->string('fitur1',64)->nullable();
            $table->string('fitur2',64)->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('user_created')->nullable();
            $table->foreign('user_created')->references('id')->on('users');
            $table->string('aktif', 1);
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
        Schema::dropIfExists('armada');
    }
};
