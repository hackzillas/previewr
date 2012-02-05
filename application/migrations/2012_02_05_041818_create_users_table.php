<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up($table)
	{
		Schema::table('users', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down($table)
	{
		Schema::table('users', function($table)
		{
			$table->drop();
		});
	}

}