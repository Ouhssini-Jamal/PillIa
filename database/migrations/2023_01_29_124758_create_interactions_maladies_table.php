<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactions_maladies', function (Blueprint $table) {
            $table->id();
            $table->string('medicament');
            $table->string('maladie');
            $table->string('effet');
            $table->foreign('medicament')->references('nom_comercial')->on('medicaments')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interactions_maladies');
    }
};
