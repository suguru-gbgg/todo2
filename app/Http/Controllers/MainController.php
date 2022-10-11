<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Text;


class MainController extends Controller
{
    function insert(Request $request){
      
      Text::where('user_id', \Auth::user()->id)->delete();

      for($i=0; $i<=$request->list; $i++){
        $a = "htext".$i;
        $task = new Text();

        $task->user_id = Auth::user()->id;
        $task->text = $request->$a;

        $task->save();
      }
      $texts = Text::where('user_id', Auth::user()->id)->get();
      return view('index',compact('texts'));
    }

    function find(){
      $texts = Text::where('user_id', Auth::user()->id)->get();
      return view('index',compact('texts'));
    }
}