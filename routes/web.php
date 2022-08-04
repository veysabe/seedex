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
    return view('welcome');
});

Route::get('/q1', function () {
    return view('q1');
});

Route::get('/q2', function () {
    return view('q2');
});

Route::get('/q3', function () {
    return view('q3');
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

    $user = User::query()->where('phone', $credentials['phone'])->first();
    if (!$user) {
        $user = new User();
        $user->phone = $credentials['phone'];
        $user->hoz = $credentials['hoz'];
        $user->password = $credentials['password'];
        $user->review = $user_info['otz'];
        $user->name = $user_info['name'];
        $user->save();
    }
    Auth::login($user);

    return redirect('/q1');
});

Route::post('/q/{q}', function (Request $request, int $q) {
    $user = Auth::user();
    $answer = Answer::query()
                    ->where('question', $request->get('a'))
                    ->where('user_id', $user->id)
                    ->first();
    if (!$answer) {
        $answer = new Answer();
        $answer->question_number = $q;
        $answer->user_id = $user->id;
        $answer->question = $q;
        $answer->is_correct = true;
    }
    $answer->answer = $request->get('a');
    $answer->save();
    $next = $q + 1;
    if ($next > 3) {
        return redirect('/end');
    }

    return redirect('/q' . $next);
});

Route::get('/test/', function (Request $request) {
    dd(Auth::user());
});
