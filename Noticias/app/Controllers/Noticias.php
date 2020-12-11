<?php namespace App\Controllers;

use App\Models\adminModel;
use App\Models\noticiasModel;

class Noticias extends BaseController
{
	public function index()
	{
		/*$request = \Config\Services::request();
		$nombre = $request -> getPost('first_name');
		$apellido = $request -> getPost('last_name');
		$correo = $request -> getPost('email');
		$telefono = $request -> getPost('phone');
		$contrasenia = $request -> getPost('password');
		$dato = [
			'nombre' => $nombre,
			'apellido' => $apellido,
			'correo' => $correo,
			'telefono' => $telefono,
			'contrasenia' => $contrasenia
		];
		$modelito = new bd_model($db);
		$modelito -> insert($dato);*/
        return view('header').view('nav').view('index').view('footer');
	}

	public function tabla() {
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> findAll();
		return view('header').view('nav').view('tabla', $dato).view('footer');
	}
	
	public function tabla2() {
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> find([1, 2]);
		return view('header').view('nav').view('tabla', $dato).view('footer');
	}	

	public function columna2() {
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> findColumn('nombre');
		return view('header').view('nav').view('tabla2', $dato).view('footer');
	}

	public function where() {
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> where('nombre', 'Dali') -> findAll();
		return view('header').view('nav').view('tabla', $dato).view('footer');
	}

	//--------------------------------------------------------------------
	
	public function login() {
		return view('header').view('nav').view('login').view('footer');
	}
	
	public function noticia() {
		return view('header').view('nav').view('noticia').view('footer');
	}

	public function crear_noticia() {
		$request = \Config\Services::request();
		$id = $request->getPost('news_id');
		$title = $request->getPost('news_title');
		$content = $request->getPost('news_content');
		$writterID = $request->getPost('news_writter');
		$image = $request->getPost('news_image');

		$actionSave = $request->getPost('news_action_save');
		$actionSearch = $request->getPost('news_action_search');
		$actionEdit = $request->getPost('news_action_edit');
		$actionDelete = $request->getPost('news_action_delete');

		$noticiasModel = new noticiasModel($db);

		$sendData['action'] = 'none';

		if (!empty($actionSave) && $actionSave == 'save') {
			$dockData = [
				'titulo' => $title,
				'contenido' => $content,
				'imagen' => $image,
				'idAdmin' => $writterID
			];
			$noticiasModel->createCRUD($dockData);
			$sendData['action'] = 'save';
		} else if (!empty($actionSearch) && $actionSearch == 'search') {
			$sendData['search'] = $noticiasModel->searchCRUD('idNoticia', $id);
			$sendData['action'] = 'search';
		} else if (!empty($actionEdit) && $actionEdit == 'edit') {
			$dockData = [
				'titulo' => $title,
				'contenido' => $content,
				'imagen' => $image,
				'idAdmin' => $writterID
			];
			$noticiasModel->updateCRUD($id, $dockData);
			$sendData['action'] = 'edit';
		} else if (!empty($actionDelete) && $actionDelete == 'delete') {
			$noticiasModel->deleteCRUD($id);
			$sendData['action'] = 'delete';
		}
		return view('header').view('nav').view('crear-noticia', $sendData).view('footer');
	}
	
	public function perfil() {
		$request = \Config\Services::request();
		$username = $request->getPost('login_user');
		$password = $request->getPost('login_password');

		$adminModel = new adminModel($db);
		$userData = $adminModel->getData($username);

		$noticiasModel = new noticiasModel($db);
		$noticiasData = $noticiasModel->getData($userData['idAdmin']);

		$sendData['user'] = $userData;
		$sendData['news'] = $noticiasData;

		if ($userData == null) return view('header').view('nav').view('index').view('footer');
		if ($userData['contrasenia'] == $password) {
			return view('header').view('nav', $userData).view('perfil', $sendData).view('footer');
		}
		return view('header').view('nav').view('index').view('footer');
	}

	public function formulario() {
		return view('formulario');
	}

}
