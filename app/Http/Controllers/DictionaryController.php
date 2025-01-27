<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{

    public function index(Dictionary $dictionary)
    {
        return view('dictionary', compact('dictionary'));
    }

}
