<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $count_users = count(User::all()->where('id', '<>', auth()->user()->id));

        return view('dashboard', [
            'count_users' => $count_users
        ]);
    }
}
