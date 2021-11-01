<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateEdictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_edicts', function (Blueprint $table) {
            $table->id();
            $table->float('rate', 2, 1);
            $table->foreignId('avaliator')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('edict_id')->constrained('edicts')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('rate_edicts');
    }
}
