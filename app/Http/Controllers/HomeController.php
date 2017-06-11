<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dictionary;
use App\Http\Requests;

class HomeController extends Controller
{
    //URL: /
    public function getIndex(){

//        dd($pidginWordId);

        $pidginWordCollections = Dictionary::all();

        return view('renders.index',compact('pidginWordCollections'));
    }

    public function getSearch(Request $request){

        $phrase = $request->all();

        $phraseResult =  Dictionary::where('word',$phrase['phrase'])->first();

        $pidginWordCollections = null;

//        dd($phraseResult);

        return view('renders.search_results', compact('phraseResult','pidginWordCollections'));
    }
}
