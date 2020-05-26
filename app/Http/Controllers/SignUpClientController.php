<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpClientRequest;
use Illuminate\Http\Request;

class SignUpClientController extends Controller
{
    //
    public function index(SignUpClientRequest $request){
        return view('pages.signup-client');
    }
}
