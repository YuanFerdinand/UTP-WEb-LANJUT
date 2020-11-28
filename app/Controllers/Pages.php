<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Genshin Impact Indonesia'
		];
		echo view('/pages/index', $data);
	}

	public function login()
	{
		$data = [
			'title' => 'Login | Genshin Impact Indonesia'
		];
		return view('/pages/login', $data);
	}

	public function register()
	{
		$data = [
			'title' => 'Login | Genshin Impact Indonesia'
		];
		return view('/pages/register', $data);
	}

	public function admin()
	{
		$data = [
			'title' => 'Admin | Genshin Impact Indonesia'
		];
		return view('/pages/admin', $data);
	}

	public function detailIndex()
	{
		$data = [
			'title' => 'Genshin Impact Indonesia'
		];
		return view('/pages/detailIndex', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | Genshin Impact Indonesia'
		];
		return view('/pages/about', $data);
	}


	//--------------------------------------------------------------------

}
