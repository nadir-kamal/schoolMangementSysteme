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
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('filiere_id');
            // $table->foreign('classe_id')->references('id')->on('classes');
            // $table->foreign('filiere_id')->references('id')->on('filieres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['classe_id']);
            $table->dropForeign(['filiere_id']);
        });
    }
};
