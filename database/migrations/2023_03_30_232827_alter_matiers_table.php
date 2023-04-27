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
        Schema::table("matiers",function(Blueprint $table){
            $table->unsignedBigInteger('enseignant_id');
            // $table->foreign('enseignant_id')->references('id')->on('enseignants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("matieres",function(Blueprint $table){
            $table->dropForeign('enseignant_id');
        });
    }
};
