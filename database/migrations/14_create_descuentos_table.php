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
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id();
            $table->decimal('porcentaje_descuento', 5, 2);
            $table->string('codigo_descuento')->nullable();
            $table->decimal('pedido_minimo', 10, 2)->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreignId('ropa_id')->constrained('ropa')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descuentos');
    }
};
