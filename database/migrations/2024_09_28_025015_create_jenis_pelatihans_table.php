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
        Schema::create('jenis_pelatihans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text("desc");
            $table->string("pelatihan_start");
            $table->string("pelatihan_end");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_pelatihans');
    }
};
