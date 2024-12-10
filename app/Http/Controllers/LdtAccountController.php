<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class LdtAccountController extends Controller
{
    //
    public function index (){
        return "<h1> Welcome to , Lâm Đức Tài - Controller </h1> ";
    }

    // create from 
    public function create( ){
        return view ('ldt-account-create');
    }

}
