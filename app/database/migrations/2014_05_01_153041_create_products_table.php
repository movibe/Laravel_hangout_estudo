<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Cria a Tabela
		Schema::create('products', function($table){
			$table->increments('id');
			$table->string('name');
			$table->decimal('price',5,2);
			$table->text('description');
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
		// Deleta a tabela se ela existir
		Schema::dropIfExists('products');
	}

}
