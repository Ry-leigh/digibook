<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{

    public function index()//order alphabetical
    {
        $dictionaries = Dictionary::orderBy('word', 'asc')->get();
        return view('dictionary', compact('dictionaries'));
    }

    public function show(Dictionary $dictionary)
    {
        $firstDictionary = Dictionary::orderBy('word', 'asc')->first();
        $lastDictionary = Dictionary::orderBy('word', 'desc')->first();

        $previous = ($dictionary->word != $firstDictionary->word)
            ? Dictionary::where('word', '<', $dictionary->word)->orderBy('word', 'desc')->first()
            : $lastDictionary;

        $next = ($dictionary->word != $lastDictionary->word)
            ? Dictionary::where('word', '>', $dictionary->word)->orderBy('word', 'asc')->first()
            : $firstDictionary;


        return view('word', compact('dictionary', 'previous', 'next'));
    }
}
