<?php
	namespace App\Http\Controllers;
	use App\User;
	use App\Movie;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
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
			public function postCreate (Request $request){
				$p = new Movie;
				$p->title = $request->input('title');
				$p->year = $request->input('year');
				$p->director = $request->input('director');
				$p->poster = $request->input('poster');
				$p->synopsis = $request->input('synopsis');
				$p->save();
				return redirect()->action('CatalogController@getIndex');
			}
			public function putEdit (Request $request, $id){
				$p = Movie::findOrFail($id);
				$p->title = $request->input('title');
				$p->year = $request->input('year');
				$p->director = $request->input('director');
				$p->poster = $request->input('poster');
				$p->synopsis = $request->input('synopsis');
				$p->save();
				return redirect()->action('CatalogController@getShow',[$id]);
			}
	}
?>