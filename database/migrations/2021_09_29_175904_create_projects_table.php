<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('archive');
            $table->string('code', 45);
            $table->text('content');
            $table->text('abstract');
            $table->text('references');
            $table->foreignId('edicts_id')->constrained('edicts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('institutes_id')->constrained('institutes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('teachers_id')->constrained('teachers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('specialities_id')->constrained('specialities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('big_areas_id')->constrained('big_areas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('areas_id')->constrained('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sub_areas_id')->constrained('sub_areas')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
