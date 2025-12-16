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
        Schema::create('objetos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',50);
            $table->string('cor_principal',50);
            $table->date('data_descoberta');
            $table->decimal('altura_media', total:10, places:2);
            $table->integer('quantidade_petalas');
            $table->boolean('comestivel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos');
    }
};
