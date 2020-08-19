<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('pages/home');
	}
	public function catalogue()
	{
		return view('pages/catalogue');
	}
	public function produk()
	{
		return view('pages/produk');
	}
	public function size()
	{
		return view('pages/size');
	}

	//--------------------------------------------------------------------

}
