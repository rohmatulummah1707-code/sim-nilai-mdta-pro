<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_ortu_wali');
            $table->string('no_hp_ortu');
            $table->text('alamat');
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->enum('status', ['aktif', 'nonaktif', 'lulus', 'pindah'])->default('aktif');
            $table->string('agama')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('nis');
            $table->index('kelas_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};