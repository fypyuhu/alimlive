<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
                        $table->string('slag');
			$table->integer('orderNo')->nullable();
                        
			$table->string('keywords')->nullable();
                        $table->string('details')->nullable();
                        
			$table->text('content')->nullable();
			
                        
                        $table->integer('type_id')->unsigned()->index();
			
                        $table->integer('user_id')->unsigned()->index();
			
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
		Schema::drop('articles');
	}

}
