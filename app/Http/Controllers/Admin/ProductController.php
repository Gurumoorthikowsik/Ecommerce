<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //




    public function create_product(){

        
        $data['title'] = 'Create Product';
    
        return view('Admin.product.create-product', $data);

    }

}
