<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function store()
     {
         $this->validate(request(), [
             'name' => 'required|regex:/^[A-Z]+$/i',
             'gender' => 'required',
             'phone' => 'required|numeric|digits:10',
             'bday' => 'required',
             'email' => 'required|email|unique:users,email',
             'password' => 'required|min:4|max:10|'
         ]);
         
         $user = new User;
         
         $user->name = request('name'); 
         $user->gender = request('gender');
         $user->phone = request('phone');
         $user->bday = request('bday');
         $user->email = request('email');
         $user->password = request('password');
         $user->save();
        return back()->with('success', 'User created successfully.');
    }
}