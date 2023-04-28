<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});

Auth::routes(['verify'=>true]);


Route::group(['middleware' => ['auth','verified']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/components', function(){
        return view('components');
    })->name('components');


    Route::resource('users', 'UserController');

    Route::get('/profile/{user}', 'UserController@profile')->name('profile.edit');

    Route::post('/profile/{user}', 'UserController@profileUpdate')->name('profile.update');

    Route::resource('roles', 'RoleController')->except('show');

    Route::resource('permissions', 'PermissionController')->except(['show','destroy','update']);

    Route::get('/activity-log', 'SettingController@activity')->name('activity-log.index');

    Route::get('/activity-ssh-log', 'SettingController@activity_ssh')->name('activity-ssh-log.index');

    Route::get('/settings', 'SettingController@index')->name('settings.index');

    Route::post('/settings', 'SettingController@update')->name('settings.update');


    Route::get('media', function (){
        return view('media.index');
    })->name('media.index');


    Route::prefix('/ssh')->group(function (){
        Route::get('/kill/{username}',[\App\Http\Controllers\SSHRouteHandler::class,'kill'])->name('ssh.kill.user');
        Route::get('/ban/{username}',[\App\Http\Controllers\SSHRouteHandler::class,'ban'])->name('ssh.ban.user');
        Route::get('/unban/{username}',[\App\Http\Controllers\SSHRouteHandler::class,'unban'])->name('ssh.unban.user');
        Route::get('/remove/{username}',[\App\Http\Controllers\SSHRouteHandler::class,'remove'])->name('ssh.remove.user');
        Route::get('/log/{id}',[\App\Http\Controllers\SSHRouteHandler::class,'GetActivitySShLogModal'])->name('ssh.log.activity');

    });

    Route::get('/ssh/banuser/{id}',[\App\Http\Controllers\SSHFactionControllers::class,'']);


    Route::get('/crons',function (){

        $SSHFactions = new \App\Http\Controllers\SSHFactionControllers();
        // Set To cron Jobs
        $SSHFactions->Import_UsersTo_SSHTable();
        $SSHFactions->Sync_SSHUsersTo_Users();
        $SSHFactions->UpdateAllUserIps();

    });



});
