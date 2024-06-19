<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Http\Request;

class employeController extends Controller
{
    public function index()
    {
        $employes = employe::all();
        return view("index", ["employes" => $employes]);
    }
    public function create()
    {
        return view('rh');
    }

   public function store(Request $request)
   {
       $request->validate([
           'nom' => 'required',
           'prénom' => 'required',
           'age' => 'required',
           'username' => 'required',
           'email' => 'required|email',
           'password' => 'required|min:6',
       ]);

       employe::create([
           'nom' => $request->nom,
           'prénom' => $request->prénom,
           'age' => $request->age,
           'username' => $request->username,
           'email' => $request->email,
           'password' => bcrypt($request->password),
       ]);

       return redirect()->route('index')
           ->with('success', 'User created successfully.');
   }


}
