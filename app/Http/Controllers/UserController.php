<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function showRoles($user_id)
{
    $user = User::findOrFail($user_id);

    $roles = $user->getAllRoles;
    
    return view('user.roles',compact('user','roles'));

}
}
