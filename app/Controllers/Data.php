<?php

namespace App\Controllers;

use App\Models\UserModel;

class Data extends BaseController
{
	public function index()
	{
		$UsersModel = new UserModel();

        $data['subjects'] = $UsersModel->GetData();

        return view('dataview', $data);
	}

    public function UsersList()
    {
        $UsersModel = new UserModel();
        $data['users']=$UsersModel->getUsersList();

        return view("userslistview", $data);
    }
}
