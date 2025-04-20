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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            
            // Relaciones
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        
            // Datos de la factura
            $table->string('folio')->unique(); // Ej: F001-0001
            $table->date('fecha_emision');
            $table->string('forma_pago'); // Ej: 01 (Efectivo), 03 (Transferencia)
            $table->string('metodo_pago'); // Ej: PUE o PPD
            $table->string('moneda')->default('MXN');
        
            // Montos
            $table->decimal('subtotal', 12, 2);
            $table->decimal('iva_total', 12, 2)->default(0);
            $table->decimal('total', 12, 2);
        
            // Simulación de timbrado
            $table->uuid('uuid_simulado')->nullable();
            $table->string('estatus')->default('pendiente'); // pendiente, timbrada, cancelada
            $table->string('xml_path')->nullable(); // Ruta del archivo XML generado
            $table->string('pdf_path')->nullable(); // Ruta del archivo PDF generado
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faturas');
    }
};
