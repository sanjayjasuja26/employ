<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

   public function index()
  {
    if(!Auth::check()) return redirect('login');

    return view('admin.index');
  }
  public function manageuser()
  {
    return view('admin.manageuser.index');
  }
}
