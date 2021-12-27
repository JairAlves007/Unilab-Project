<?php

namespace App\Http\Controllers;

use App\Models\Edicts;
use App\Models\User;

class DashboardController extends Controller
{
  public function index()
  {
    $count_users = count(User::all()->where('id', '<>', auth()->user()->id));
    $count_edicts = count(Edicts::all()->where('users_id', '==', auth()->user()->id));
    $count_all_edicts = count(Edicts::all());

    return view('dashboard', [
      'count_users' => $count_users,
      'count_edicts' => $count_edicts,
      'count_all_edicts' => $count_all_edicts
    ]);
  }
}
