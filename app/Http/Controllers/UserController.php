<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

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

        return view('create');
    }

    public function home(){

        return "home";

    }

    public function store(Request $request){

        $name = $request->name;
        $email = $request-> email;
        $password = $request->password;


        if (empty($name) or empty($email) or empty($password)) {

            return redirect()->route('crear')->withErrors([
                'name' => 'all fields are required'
            ]);

        }else{

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
    
            return redirect()->route('users');
        }

        

    }

    public function edit(User $user){

        return view('edit', compact('user'));

    }

    public function modify(Request $request, $id){

        $user = User::findOrFail($id);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();

        return redirect()->route('users');

    }
}
