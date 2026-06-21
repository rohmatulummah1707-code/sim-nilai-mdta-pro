<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rapor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santri')->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->foreignId('tahun_ajaran_id')->constrained('tahun_ajaran')->onDelete('cascade');
            $table->foreignId('semester_id')->constrained('semester')->onDelete('cascade');

            $table->decimal('total_nilai', 8, 2)->nullable();
            $table->decimal('rata_rata', 5, 2)->nullable();
            $table->integer('ranking')->nullable();

            $table->text('catatan_guru')->nullable();
            $table->text('catatan_kepala')->nullable();
            $table->string('ttd_guru')->nullable();
            $table->string('ttd_kepala')->nullable();

            $table->enum('status', ['draft', 'final', 'printed'])->default('draft');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['santri_id', 'tahun_ajaran_id', 'semester_id']);
            $table->index('kelas_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rapor');
    }
};