<?php

class Create_Preview_Statuses_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('preview_statuses', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->string('name');
			$table->string('display_name');
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
		Schema::table('preview_statuses', function($table)
		{
			$table->drop();
		});
	}

}