<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function create(){

    	$users=['Luisa','Laura','Edwin','Paula'];

    	return view('users.create', compact('users'));
    }

    public function read(){

    	$users=['Luisa','Laura','Edwin','Paula'];

    	return view('users.read', compact('users'));
    }
}
