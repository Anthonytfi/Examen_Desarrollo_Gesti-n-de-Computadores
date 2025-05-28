<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('computadores', function (Blueprint $table) {
            $table->id(); // Campo ID automático
            $table->string('codigo_tienda'); // Código de tienda
            $table->string('almacenamiento'); // Almacenamiento (ej. "512GB")
            $table->string('ram'); // RAM (ej. "16GB")
            $table->string('tarjeta_grafica'); // Tarjeta gráfica (ej. "NVIDIA GTX 1650")
            $table->decimal('precio', 8, 2); // Precio (ej. 999.99, con 2 decimales)
            $table->text('descripcion'); // Descripción (texto largo)
            $table->string('imagen'); // Imagen (ruta o URL de la imagen)
            $table->string('procesador'); // Procesador (ej. "Intel i7")
            $table->timestamps(); // Campos created_at y updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('computadores');
    }
};
