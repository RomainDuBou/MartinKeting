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
        Schema::create('echanges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prospect_id')->references('id')->on('prospects');
            $table->date('date');
            $table->time('heure');
            $table->text('contenu');
            $table->enum('type', ['Telephone', 'Email', 'Echange_direct', 'Courrier']);
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('echanges');
    }
};
