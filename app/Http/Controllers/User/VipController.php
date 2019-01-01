<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User;
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


    /**
     * 添加新用户
     * 2019年1月1日23:00:16
     * liwei
     */
    public function add()
    {
        $data = [
            'user_name' => str_random(5),
            'age'       => mt_rand(10,99),
            'email'     => str_random(6) . '@gmail.com',
            'add_time'  => time()
        ];

        $id = UserModel::insertGetId($data);
        echo 'Uid: '.$id;
    }
}
