<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function show(){
    $data['user_count'] = User::count();
    return view('app.dashboard', compact('data'));
  }
}
