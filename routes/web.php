<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Test',[
        'name' => 'Asif Khan',
        'tools' => [
            'Laravel',
            'Vue',
            'Inertia'
        ]
    ]);
});

Route::get('/', function(){
    return Inertia::render('Home');
});
Route::get('/users', function(){
    // sleep(1);
    // return dd(User::paginate(10)->toArray());
    return Inertia::render('Users',[
        'users' => User::Query()
            ->when(Request::input('search'),function($query,$search){
                $query->where('name','like',"%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user)=>[
                'name' => $user->name,
                'id' => $user->id
            ]),
        'filters' => Request::only(['search'])
        // 'users' => User::paginate(10),
    ]);
});
Route::get('/settings', function(){
    return Inertia::render('Settings');
});
Route::post('/logout', function(){
    dd('logout is treggar');
});

