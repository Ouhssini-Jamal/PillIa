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
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('nom_comercial')->unique();
            $table->string('nom_molecule');
            $table->double('dosage');
            $table->string('unite_dosage');
            $table->double('prix');
            $table->timestamps();
        });
        schema::create('interactions', function (Blueprint $table){
            $table->id();
            $table->string('medicament1');
            $table->string('medicament2');
            $table->string('gravite');
            $table->string('effet');
            $table->foreign('medicament1')->references('nom_comercial')->on('medicaments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('medicament2')->references('nom_comercial')->on('medicaments')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
};
