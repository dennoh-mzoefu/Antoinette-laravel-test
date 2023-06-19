<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class User
{
    public function __construct(
        public int $id,
        public string $title,
      

    ) {
    }
}

$users = [
    new User(
        1,
        'Antoinette',
        
    ),
    new User(
        1,
        'Kysher',
        

    ),
];

Route::get('/', function () {
    // return view('index',[
    //     'users'=> $users
    // ]);
    return view('index',['users'=>\App\Models\User::all()]);
}) -> name('users');

// Route::get('index/{id}', function ($id) {
//     return view('roles');
// }) -> name('roles');




Route::get('/user/{userId}/roles', [UserController::class, 'showRoles'])->name('user.roles');
