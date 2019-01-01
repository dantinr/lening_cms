<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\UserModel;

class VipController extends Controller
{

	public function index()
    {
        $users = UserModel::get()->toArray();
        echo '<pre>';print_r($users);echo '</pre>';
    }
}
