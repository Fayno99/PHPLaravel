<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Supervisor', function (Blueprint $table) {
            $table->foreign('supervisor_id')->references('id')->on('Employee');
            $table->foreign('animals_id')->references('id')->on('Animals');
        });

        Schema::table('Food_animal', function (Blueprint $table) {
            $table->foreign('animal_id')->references('id')->on('Animals');
            $table->foreign('animal_feed_id')->references('id')->on('Food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Supervisor', function (Blueprint $table) {
            $table->dropForeign(['supervisor_id']);
            $table->dropForeign(['animals_id']);
        });
        Schema::table('Food_animal', function (Blueprint $table) {
            $table->dropForeign(['animal_id']);
            $table->dropForeign(['animal_feed_id']);
        });
    }
};

