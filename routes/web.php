<?php
use App\Notifications\SubscriptionCanceld;
use App\Notifications\LessonUpdate;
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

Auth::loginUsingId(1);

Route::get('/', function () {

   // Auth::user()->notify(new SubscriptionCanceld);
   $lesson = App\Lesson::first();
   //Auth::user()->notify(new LessonUpdate($lesson));
    return view('welcome');
});


Route::delete('users/{user}/notifications',function(App\User $user){
   
    $user->unreadNotifications->map(function($n) {

        $n->markAsRead();

    });

    return back();
});
