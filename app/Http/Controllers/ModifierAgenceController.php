<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModifierAgenceRequest;
use Illuminate\Http\Request;

class ModifierAgenceController extends Controller
{
    //
    public function index(ModifierAgenceRequest $request){
        return view('pages.home-entreprise');
    }
}
