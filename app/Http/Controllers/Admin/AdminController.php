<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function adminlogin(){



        $data['title'] = 'Admin Dashboard';

            
         return view('Admin.admin-login', $data);
        
        

    }

}
