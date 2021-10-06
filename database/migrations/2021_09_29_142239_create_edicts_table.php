<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edicts', function (Blueprint $table) {
            $table->id();
            $table->year('edict_year');
            $table->string('archive');
            $table->string('code');
            $table->text('description');
            $table->dateTime('submission_start');
            $table->dateTime('submission_finish');
            $table->dateTime('rate_start');
            $table->dateTime('rate_finish');
            
            $table
                ->foreignId('min_titulations_id')
                ->constrained('min_titulations')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreignId('categories_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edicts');
    }
}
