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
            // Eliminamos los campos email y password
            $table->dropColumn([ 'email', 'password', ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revertimos los cambios en caso de fallo
            Schema::table('users', function (Blueprint $table) { $table->string('email')->nullable(); $table->string('password')->nullable(); });
        });
    }
};
