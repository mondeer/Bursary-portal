<?php

namespace bursary\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;

class LoginCtrl extends Controller
{
  public function login(Request $request) {
    try {
      if ( Sentinel::authenticate($request->all()) ) {

        if(Sentinel::getUser()->roles()->first()->slug == 'admin')
          return redirect('/system/admin');
        elseif (Sentinel::getUser()->roles()->first()->slug == 'village')
          return redirect('/village-rep/admin');
        elseif (Sentinel::getUser()->roles()->first()->slug == 'student')
          return redirect('/student/dashboard');

      } else {
        return redirect()->back()->with(['error' => 'Have you forgoten your credentials?']);
      }
    } catch (ThrottlingException $e) {
        $delay = $e->getDelay();

        return redirect()->back()->with(['error' => 'you have been banned for '.$delay.' seconds']);
    }
  }

  public function logout() {
    Sentinel::logout();

    return redirect('/');
  }
}
