<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpEntrepriseRequest;

class SignUpEntrepriseController extends Controller
{
    //
    public function index(SignUpEntrepriseRequest $request){
        return view('pages.signup-entreprise');
    }

    public function store(SignUpEntrepriseRequest $request){
        
    }
}
