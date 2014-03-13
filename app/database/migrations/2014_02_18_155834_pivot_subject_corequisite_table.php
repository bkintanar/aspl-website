<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotSubjectCorequisiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('subject_corequisite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned()->index();
            $table->integer('corequisite_id')->unsigned()->index();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subject_corequisite');
	}

}
