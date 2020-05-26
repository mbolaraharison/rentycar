<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index(SignInRequest $request){
        return view('pages.signin');
    }
}
