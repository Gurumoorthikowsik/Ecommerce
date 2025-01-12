<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function index(){

       

        $data['title'] = 'Home Page';

        return view('User.home');

    }
}
