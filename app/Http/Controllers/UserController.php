<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index(){
        $data = Array(
            'title'     => 'Data User',
            'menuAdminUser'     => 'active',

        );
        return view('admin/user/index',$data);
    }
}
