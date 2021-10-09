<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\FormValidationRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $count_users = count(User::all()->where('id', '<>', auth()->user()->id));

        return view('dashboard', [
            'count_users' => $count_users
        ]);
    }

    public function create()
    {
        return view('auth.registerAnotherUser');
    }

    public function store(FormValidationRequest $request)
    {

        $request->validated();

        $data = $request->all();

        $checking_user_email = User::where('email', $data['email'])->get();

        if (count($checking_user_email) == 0) {

            User::create([

                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),

            ])->syncRoles($data['niveis']);

            return redirect('/users/view');
            
        } else {

            return redirect('/user/register')
                ->withErrors('Esse E-Mail Já Existe! Tente Outro E-Mail Válido');
        }
    }

    public function show()
    {
        $all_users = User::where('id', '<>', auth()->user()->id)->paginate(5);


        return view('showUsers', ['all_users' => $all_users]);
    }

    public function showUser($id)
    {
        if ($id != auth()->user()->id) {

            $user_checking = User::findOrFail($id);

            $user_roles = User::find($id)->roles;

            return view('showUser', [
                'user_checking' => $user_checking,
                'user_roles' => $user_roles
            ]);
        } else {
            return redirect('/dashboard');
        }
    }

    public function edit($id)
    {

        $user_checking = User::findOrFail($id);

        $user_roles = User::find($id)->roles;

        return view('edit', [
            'user_checking' => $user_checking,
            'user_roles' => $user_roles
        ]);
    }

    public function update(FormValidationRequest $request)
    {

        $request->validated();

        $data = $request->except('niveis');

        $data['password'] = Hash::make($data['password']);

        User::findOrFail($request->id)
            ->syncRoles($request['niveis'])
            ->update($data);

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect('/users/delete');
    }
}
