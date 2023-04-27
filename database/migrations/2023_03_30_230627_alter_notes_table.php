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
        //
        Schema::table("notes",function(Blueprint $table){
            $table->unsignedBigInteger('student_id');
            // $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('matiere_id');
            // $table->foreign('matiere_id')->references('id')->on('matieres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("notes",function(Blueprint $table){
            $table->dropForeign('student_id');
            $table->dropForeign('matiere_id');
        });
    }
};
