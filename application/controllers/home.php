<?php

class Home_Controller extends Base_Controller {


     public $restful=true;
	

	public function get_index()
	{
		return View::make('home.index');
	}

	public function post_index()
	{
		$name=Input::get('name');
      $address=Input::get('address');
      $tpno=Input::get('tpno');

      //extract($_POST)

	 $match= Hospital::where_name($name)->first(); 
	// dd($match);

	 if($match)
	 return "Already There";

	else{

		Hospital::create(array(
           'name' => $name,
           'address' => $address,
           'tpno' =>$tpno   
			));


		return "Added";
	}
	}

}