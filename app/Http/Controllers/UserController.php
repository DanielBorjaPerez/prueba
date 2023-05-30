<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();

        $title="Listado de usuarios";

        return view('users', compact('title','users'));
    }

    public function show($id){

        $user = User::find($id);

        if ($user == null) {
            return view('404');
        }

        return view('show', compact('user'));
    }

    public function create(){

        return "nuevo";
    }

    public function home(){

        return "home";

    }
}
