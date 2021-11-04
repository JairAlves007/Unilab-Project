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
            $table->string('title');
            $table->string('archive');
            $table->string('code');
            $table->text('description');
            $table->date('submission_start');
            $table->date('submission_finish');
            $table->date('rate_start');
            $table->date('rate_finish');
            $table->date('execution_start');
            $table->date('execution_finish');

            $table->timestamps();
            
            $table
                ->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
