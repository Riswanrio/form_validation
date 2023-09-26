<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request; 
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

class ApiController extends Controller
{
   public function user(Request $request,$id){
      $user = User::find($id);
      return new UserResource($user);
   }
   public function users(){
    $users = User::all();
    return new UserCollection($users);
   }
}
