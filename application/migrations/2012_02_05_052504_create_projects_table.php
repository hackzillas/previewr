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
			$table->integer('user_id');
			$table->string('name');
			$table->string('description');
			$table->integer('private')->length(1);
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