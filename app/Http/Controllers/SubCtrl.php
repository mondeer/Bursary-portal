<?php

namespace bursary\Http\Controllers;

use Illuminate\Http\Request;
use bursary\Subscribe;

class SubCtrl extends Controller
{
    public function Subscribe(Request $request){
      $subscribe = new Subscribe();

      $subscribe->email = $request->input('email');
      $subscribe->save();

      return redirect()->back();
    }
}
