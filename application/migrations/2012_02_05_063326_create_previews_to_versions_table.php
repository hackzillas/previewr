<?php

class Create_Previews_To_Versions_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('previews_to_versions', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->integer('preview_id');
			$table->integer('version_id');
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
		Schema::table('previews_to_versions', function($table)
		{
			$table->drop();
		});
	}

}