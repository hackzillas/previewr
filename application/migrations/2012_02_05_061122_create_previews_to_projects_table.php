<?php

class Create_Previews_To_Projects_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('previews_to_projects', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->integer('preview_id');
			$table->integer('project_id');
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
		Schema::table('previews_to_projects', function($table)
		{
			$table->drop();
		});
	}

}