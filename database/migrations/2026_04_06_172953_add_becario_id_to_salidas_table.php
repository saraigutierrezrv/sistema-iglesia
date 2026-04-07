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
    Schema::table('salidas', function (Blueprint $table) {
        // Agregamos la llave foránea conectada a la tabla becarios. 
        // Es nullable porque San Nicolás no usa becarios.
        $table->foreignId('becario_id')->nullable()->constrained('becarios')->nullOnDelete();
    });
}

    public function down(): void
    {
        Schema::table('salidas', function (Blueprint $table) {
            $table->dropForeign(['becario_id']);
            $table->dropColumn('becario_id');
        });
    }
};
