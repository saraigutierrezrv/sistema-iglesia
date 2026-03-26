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
        Schema::create('salidas', function (Blueprint $table) {
            $table->id();
            $table->string('panel_id')->default('san-nicolas');
            $table->decimal('monto', 10, 2);
            $table->string('categoria'); // Gastos generales, viáticos, etc. [cite: 14]
            $table->text('descripcion')->nullable();
            $table->date('fecha'); // Para los filtros de rango de fechas [cite: 16]
            $table->string('comprobante')->nullable(); // Imágenes, pdfs, etc. [cite: 15]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas');
    }
};
