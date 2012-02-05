<?php

class Create_Preview_Stats_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('preview_stats', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->integer('preview_id');
			$table->integer('user_id');
			$table->string('temp_user_name');
			$table->string('ip_address');
			$table->string('user_agent');
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
		Schema::table('preview_stats', function($table)
		{
			$table->drop();
		});
	}

}