<?php

class Create_Projects_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projects', function($table)
		{
			$table->drop();
		});
	}

}