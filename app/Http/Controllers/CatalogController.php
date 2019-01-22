<?php
	namespace App\Http\Controllers;
	use App\User;
	use App\Movie;
	use App\Http\Controllers\Controller;
		class CatalogController extends Controller
		{

			public function getIndex (){
			//return "Nosotros desde el controlador";
				return view('index',array('arrayPeliculas'=>$this->arrayPeliculas = Movie::all()));
			}
			public function login (){
			//return "Nosotros desde el controlador";
				return view('login');
			}
			public function logout (){
			//return "Nosotros desde el controlador";
				return view('logout');
			}
			public function getShow($id){
			//return "Nosotros desde el controlador";
				return view('show', array('arrayPeliculas'=>Movie::findOrFail($id)))->with('idPeliculas', $id);
			}
			public function getCreate (){
			//return "Nosotros desde el controlador";
				return view('create');
			}
			public function getEdit ($id){
			//return "Nosotros desde el controlador";
				return view('edit', array('arrayPeliculas'=>Movie::findOrFail($id)));
			}

	}
?>