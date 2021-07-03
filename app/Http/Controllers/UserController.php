<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function list_students()
    {
        $students=User::role('etudiant')->get(); 
        return view('admin/students');
    }
    public function create()
    {
        return view('admin/add_students');
    }
    public function add_user(Request $request)
    {
        $input=$request->all();
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8,max:20'],
        ])->validate();
         $user=User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        $user->assignRole('etudiant');
       return redirect(route('list_students'));
    }
}
