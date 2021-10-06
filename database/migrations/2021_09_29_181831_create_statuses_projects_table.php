<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses_projects', function (Blueprint $table) {
            $table->id();
            $table->dateTime('status_date');
            $table->foreignId('statuses_id')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('projects_id')->constrained('projects')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses_projects');
    }
}
