<?php
	namespace App\Http\Controllers;
	use App\User;
	use App\Http\Controllers\Controller;
		class HomeController extends Controller
		{
			public function getHome (){
			//return "Nosotros desde el controlador";
				return view('home');
				return redirect()->action('CatalogController@getIndex');
			}

	}
?>