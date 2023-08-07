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
        Schema::create('imagenes_ropa', function (Blueprint $table) {
            $table->id();
            $table->string('url_imagen');
            $table->string('descripcion')->nullable();
            $table->foreignId('ropa_id')->constrained('ropa')->index('imagenes_ropa_ropa_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes_ropa');
    }
};
