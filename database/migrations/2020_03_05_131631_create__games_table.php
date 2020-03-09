<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('Genere');
            $table->string('Name')->unique();
            $table->string('Developer');
            $table->string('Status');
            $table->decimal('Value');
            $table->date('Published_at')->nullable();
            $table->string('Contact_page');
            $table->string('img')->default('default.jpg'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
