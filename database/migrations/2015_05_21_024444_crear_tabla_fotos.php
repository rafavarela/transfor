<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFotos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fotos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('imagen',245);
            $table->integer('producto_id')->unsigned();

            // Relacion con tabla productos
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');

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
		Schema::drop('fotos');
	}

}
