<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    //
    public function getIndex(){

        $pidginWordCollections = Dictionary::all();

        return view('master.index', compact('pidginWordCollections'));
    }

    public function postIndex(Request $requests){

//        $this->validate($requests,[
//            'word' => 'required',
//            'definition' => 'required',
//        ]);

        $formData = $requests->all();

        $dictionary =  new Dictionary();
        $dictionary->word = $formData['word'];
        $dictionary->definition = $formData['definition'];

       $dictionary->save();

        //dd($formData);

        return redirect("/master")->with("error","Pidgin word has been added!");
    }
}
