<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupIdColumnToNavlinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('navlinks', function (Blueprint $table) {
			$table->integer('group_id')->after('icon');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('navlinks', function (Blueprint $table) {
			$table->dropColumn('group_id');
		});
	}

}
