<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\text;
use App\Models\YourModel;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function insert(Request $request){
      for($i=1; $i<=$request->textcount; $i++){
        $a = "htext".$i;
        $task = new YourModel();

        $task->user_id = Auth::user()->id;
        $task->text = $request->a;

        $task->save();
      }
    }
}
