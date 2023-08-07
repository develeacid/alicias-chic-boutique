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
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained()->onDelete('cascade');
            $table->foreignId('ropa_id')->constrained('ropa')->index('detalle_pedido_ropa_id_foreign');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10, 2);
            $table->foreignId('descuento_id')->nullable()->constrained('descuentos');
            $table->timestamps();

            $table->index('pedido_id');
            $table->index('ropa_id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
