<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\FormProfileValidationRequest;

class ProfileController extends Controller
{
    public function show($id)
    {

        if ($id == auth()->user()->id) {
            $user_checking = User::findOrFail($id);

            $user_roles = User::find($id)->roles;

            return view('users.showUser', [
                'user_checking' => $user_checking,
                'user_roles' => $user_roles
            ]);
        } else {
            return redirect()->route('dashboard'); // futuramente uma página de erro
        }
    }

    public function edit($id)
    {

        if ($id == auth()->user()->id) {
            $user_checking = User::findOrFail($id);

            return view('users.userEdit', ['user_checking' => $user_checking]);
            
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function update(FormProfileValidationRequest $request)
    {

        $request->validated();

        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        User::findOrFail($request->id)->update($data);

        return redirect()->route('users.view');
    }
}
