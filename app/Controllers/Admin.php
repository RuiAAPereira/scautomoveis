<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [];

		return view('admin', $data);
	}

//--------------------------------------------------------------------

}
