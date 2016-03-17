<?php

class ProcController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function show(){
		//查询
		$proc = Proc::all();
		//var_dump($proc);
//		$proc = Proc::find(1);
		//$Proc = Proc::findOrFail(1);
		//$Proc = Proc::where('votes', '>', 100)->firstOrFail();
		$proc = new Proc;
	/*	$proc->c_name = 'tome';
		$proc->c_time = '111';
		$proc->save();*/

		/*$proc::where('c_time','=','22')->get();
		var_dump($proc);
		$proc->c_time = '222';
		$proc->save();*/
	//	echo $proc::where('c_time','=','22')->update(array('c_name'=>'tome1'));
		echo $proc->touch();
		//var_dump($insertedId = $proc->id);
		//$user = $proc::create(array('name' => 'John'));
		//var_dump($user);

	}

}
