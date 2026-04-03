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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false); // Si es true, ve el CRUD de usuarios y todos los paneles
            $table->boolean('acceso_san_nicolas')->default(false);
            $table->boolean('acceso_woodmont')->default(false);
            $table->boolean('acceso_mckinney')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_admin', 'acceso_san_nicolas', 'acceso_woodmont', 'acceso_mckinney']);
        });
    }
};
