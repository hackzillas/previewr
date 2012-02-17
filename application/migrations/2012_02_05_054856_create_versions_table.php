<?php

class Create_Versions_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('versions', function($table)
		{
			$table->create();

			$table->increments('id');
			$table->integer('preview_id');
			$table->string('name');
			$table->string('description');
			$table->string('image_src');
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
		Schema::table('versions', function($table)
		{
			$table->drop();
		});
	}

}