<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCmsNoticias extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_noticias', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('titulo',245);
            $table->string('encabezado',245);
            $table->longText('detalle')->nullable();
            $table->integer('seccion_id')->unsigned();

            // Relacion con tabla cms_secciones
            $table->foreign('seccion_id')
                ->references('id')
                ->on('cms_secciones')
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
		Schema::drop('cms_noticias');
	}

}
