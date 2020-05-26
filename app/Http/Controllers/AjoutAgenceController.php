<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AjoutAgenceRequest;

class AjoutAgenceController extends Controller
{
    //
    public function index(AjoutAgenceRequest $request){
        return view('pages.home-entreprise');
    }
}
