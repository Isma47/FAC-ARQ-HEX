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
        Schema::create('factura_detalles', function (Blueprint $table) {
            $table->id();

            // Relación con la factura
            $table->unsignedBigInteger('factura_id');
            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');
        
            // Relación con el producto o servicio
            $table->unsignedBigInteger('producto_servicio_id');
            $table->foreign('producto_servicio_id')->references('id')->on('productos_servicios')->onDelete('cascade');
        
            // Datos del concepto facturado
            $table->decimal('cantidad', 10, 2);
            $table->decimal('precio_unitario', 12, 2);
            $table->decimal('importe', 12, 2);
            $table->decimal('tasa_iva', 5, 2)->default(0.00); 
            $table->decimal('iva_calculado', 12, 2)->default(0.00);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_detalles');
    }
};
