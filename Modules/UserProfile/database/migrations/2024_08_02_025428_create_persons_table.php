<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unique()->nullable();
            $table->string('nama_lengkap');
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_ktp')->unique()->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('email_pribadi')->nullable();
            $table->string('email_organisasi')->unique();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
