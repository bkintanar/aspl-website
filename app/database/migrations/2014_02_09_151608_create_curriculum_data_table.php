<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('curriculum_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curriculum_id')->unsigned()->index();
            $table->integer('year');
            $table->integer('semester_id')->unsigned()->index();
            $table->integer('subject_id')->unsigned()->index();
            $table->float('passing');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curriculum_data');
	}

}
