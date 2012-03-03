<?php

class Create_Previews_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('previews', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->integer('project_id');
			$table->string('name');
			$table->string('description');
			$table->integer('version_id');
			$table->integer('preview_status_id');
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
		Schema::table('previews', function($table)
		{
			$table->drop();
		});
	}

}