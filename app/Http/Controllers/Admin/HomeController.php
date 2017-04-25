<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
  public function index(){
    $user = Auth::user();
    if($user->admin_state==0)
      return redirect()->route('user_home');
    return view('admin/home');
  }
}
