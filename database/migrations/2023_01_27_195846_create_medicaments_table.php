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
            $table->string('nom_comerial');
            $table->string('nom_molecule');
            $table->double('prix', 8, 2);
            $table->timestamps();
        });
        schema::create('interactions', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('medicament_id1');
            $table->unsignedBigInteger('medicament_id2');
            $table->string('gravite');
            $table->foreign('medicament_id1')->references('id')->on('medicaments')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('medicament_id2')->references('id')->on('medicaments')
            ->onUpdate('cascade')->onDelete('cascade');
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
