<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Text;


class MainController extends Controller
{
    function insert(Request $request){
      for($i=0; $i<=$request->list; $i++){
        $a = "htext".$i;
        $task = new Text();

        $task->user_id = Auth::user()->id;
        $task->text = $request->$a;

        $task->save();
      }
    }
}

class MainController extends Controller
{
  function find(){
    $text = Text::find(Auth::user()->id);
    echo $text->text;
  }
}