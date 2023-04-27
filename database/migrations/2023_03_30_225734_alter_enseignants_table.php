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
        
            Schema::table('enseignants', function (Blueprint $table) {
                $table->unsignedBigInteger('classe_id');
                // $table->foreign('classe_id')->references('id')->on('classes');
                $table->unsignedBigInteger('matiere_id');
                // $table->foreign('matiere_id')->references('id')->on('matieres');
            });
    
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("enseignants",function(Blueprint $table){
     
            $table->dropForeign('classe_id');
            $table->dropForeign('matiere_id');
        });
    }
};
