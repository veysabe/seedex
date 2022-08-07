<?php

use App\Models\Answer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

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
    return view('q1');
});

Route::get('/q2', function () {
    return view('q2');
});

Route::get('/q3', function () {
    return view('q3');
});

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/end', function () {
    return view('end');
});

Route::post('/register-user/', function (\Illuminate\Http\Request $request) {
    $user_info = $request->toArray();
    $credentials = [
        'phone'    => $user_info['phone'],
        'hoz'      => $user_info['hoz'],
        'password' => $user_info['phone'],
    ];

    $user = Auth::user();
    if ($user) {
        $user->phone = $credentials['phone'];
        $user->hoz = $credentials['hoz'];
        $user->password = $credentials['password'];
        $user->review = $user_info['otz'];
        $user->name = $user_info['name'];
        $user->save();
    }
    Auth::login($user);

    return redirect('/end');
});

Route::post('/q/1', function (Request $request) {
    $user = new User();
    $user->save();
    Auth::login($user);
    $answer = Answer::query()
                    ->where('question', 1)
                    ->where('user_id', $user->id)
                    ->first();
    if (!$answer) {
        $answer = new Answer();
        $answer->question_number = 1;
        $answer->user_id = $user->id;
        $answer->question = 1;
        $answer->is_correct = true;
        $answer->answer = $request->get('a');
        $answer->save();
    }
    return redirect('/q2');
});

Route::post('/q/2', function (Request $request) {
    $q = 2;
    $user = Auth::user();
    if (!$user) {
        return redirect('/');
    }
    $answer = Answer::query()
                    ->where('question', $q)
                    ->where('user_id', $user->id)
                    ->first();
    if (!$answer) {
        $answer = new Answer();
        $answer->question_number = $q;
        $answer->user_id = $user->id;
        $answer->question = $q;
        $answer->is_correct = true;
        $answer->answer = $request->get('a');
        $answer->save();
    }

    return redirect('/q3');
});

Route::post('/q/3', function (Request $request) {
    $q = 3;
    $user = Auth::user();
    if (!$user) {
        return redirect('/');
    }
    $answer = Answer::query()
                    ->where('question', $q)
                    ->where('user_id', $user->id)
                    ->first();
    if (!$answer) {
        $answer = new Answer();
        $answer->question_number = $q;
        $answer->user_id = $user->id;
        $answer->question = $q;
        $answer->is_correct = true;
        $answer->answer = $request->get('a');
        $answer->save();
    }

    return redirect('/register');
});

Route::get('/test/', function (Request $request) {
    dd(Auth::user());
});

Route::get('/answers', [\App\Http\Controllers\ExportController::class, 'exportCsv']);
