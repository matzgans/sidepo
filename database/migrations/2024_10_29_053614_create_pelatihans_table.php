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
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("jenis_pelatihan_id")->constrained("jenis_pelatihans")->cascadeOnDelete();
            $table->foreignId("peserta_id")->constrained("pesertas")->cascadeOnDelete();
            $table->enum('is_status', [0, 1, 3])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihans');
    }
};
