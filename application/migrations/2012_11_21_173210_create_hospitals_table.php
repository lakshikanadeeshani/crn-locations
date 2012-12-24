<?php

class Create_Hospitals_Table {    

	public function up()
    {
		Schema::create('hospitals', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->integer('tpno');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('hospitals');

    }

}