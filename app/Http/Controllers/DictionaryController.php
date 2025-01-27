<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{

    public function index()//order alphabetical
    {
        $dictionaries = Dictionary::all();
        return view('dictionary', compact('dictionaries'));
    }

    public function show(Dictionary $dictionary)
    {
        return view('word', compact('dictionary'));
    }
}
