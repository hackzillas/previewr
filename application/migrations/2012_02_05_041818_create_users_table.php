<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the users table
		Schema::table('users', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->integer('user_level')->limit(2);
			$table->timestamps();
		});

		// Insert a default user
		$user = array(
			'name' => 'Test User',
			'email' => 'default@gmail.com',
			'password' => Hash::make('password')
		);
		DB::table('users')->insert($user);
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
			$table->drop();
		});
	}

}