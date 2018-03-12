<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
                        $table->string('model');
                        $table->string('production_year');
                        $table->string('miles');
                        $table->string('power');
                        $table->string('fuel');
			$table->string('photo_filename')->nullable();
                        $table->string('photo_filename_1')->nullable();
                        $table->string('photo_filename_2')->nullable();
                        $table->string('photo_filename_3')->nullable();
                        $table->string('photo_filename_4')->nullable();
                        $table->string('photo_filename_5')->nullable();
                        $table->string('photo_filename_6')->nullable();
			$table->text('description')->nullable();
			$table->longText('specification')->nullable();
			$table->decimal('price', 8, 2)->default(0);

			
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
        Schema::dropIfExists('cars');
    }
}

