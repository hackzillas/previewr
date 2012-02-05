<?php

class Create_Comments_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->integer('preview_id');
			$table->integer('user_id');
			$table->string('temp_user_name');
			$table->integer('parent_id');
			$table->text('body');
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
		Schema::table('comments', function($table)
		{
			$table->drop();
		});
	}

}