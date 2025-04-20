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
        Schema::create('productos_servicios', function (Blueprint $table) {
            $table->id();
    
            $table->string('nombre');
            $table->text('descripcion')->nullable();
    
            // Información del SAT
            $table->string('clave_sat');         
            $table->string('unidad_sat');       
            
            $table->string('unidad')->nullable(); 
    
            // Precios
            $table->decimal('precio_unitario', 12, 2);
            $table->decimal('tasa_iva', 5, 2)->default(0.00); 
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_servicios');
    }
};
