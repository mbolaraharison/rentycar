<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(SearchRequest $request){
        return view('welcome');
    }

    public function store(SearchRequest $request){
    }
}
