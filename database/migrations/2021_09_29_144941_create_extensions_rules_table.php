<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionsRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extensions_rules', function (Blueprint $table) {
            $table->foreignId('file_extensions_id')->constrained('file_extensions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('file_rules_id')->constrained('file_rules')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extensions_rules');
    }
}
