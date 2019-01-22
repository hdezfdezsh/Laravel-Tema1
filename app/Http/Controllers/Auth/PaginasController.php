<?php
	namespace App\Http\Controllers;
	use App\User;
	use App\Http\Controllers\Controller;
		class PaginasController extends Controller
		{
			public function home (){
			//return "Nosotros desde el controlador";
				return view('home');
			}
			public function login (){
			//return "Nosotros desde el controlador";
				return view('login');
			}
			public function logout (){
			//return "Nosotros desde el controlador";
				return view('logout');
			}
			public function show (){
			//return "Nosotros desde el controlador";
				return view('catalog.show', array('id'=>$id=1));
			}
			public function create (){
			//return "Nosotros desde el controlador";
				return view('catalog.create');
			}
			public function edit (){
			//return "Nosotros desde el controlador";
				return view('catalog.edit', array('id'=>$id=1));

			}

	}
?>