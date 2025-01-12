<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function adminlogin(){

        $data['title'] = 'Admin Login';
         return view('Admin.admin-login', $data);
    }

    public function admindashbord(){
        $data['title'] = 'Admin Dashboard';
        return view('Admin.admin-dashboard', $data);
    }

}
