<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormValidationRequest;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   public function form_registration(){

      if(auth()->user()->can_access == 0) {
         return view('users.formRegistration');
      } else {
         return redirect()->route('dashboard');
      }

   }

   public function registration(Request $request) {
      $data = $request->all();

      Students::create([
         'registrations' => $data['registrations'],
         'users_id' => auth()->user()->id
      ]);

      User::where('id', auth()->user()->id)->update([
         'can_access' => 1
      ]);

      return redirect()->route('dashboard');
   }

   public function register(FormValidationRequest $request) {
      $request->validated();

      $data = $request->all();

      $checking_user_email = User::where('email', $data['email'])->get();

      if(count($checking_user_email) == 0) {
         if(
            in_array('bolsista', $data['niveis']) || 
            in_array('orientador', $data['niveis'])
         ) {
         
            $can_access = 0;
   
         } else {
   
            $can_access = 1;
   
         }
   
         User::create([
   
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'can_access' => $can_access
   
         ])->syncRoles($data['niveis']);
      }
      
      return redirect()->route('dashboard');
   }

   public function create()
   {
      return view('users.registerAnotherUser');
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

         return redirect()
            ->route('users.view')
            ->with('msg', 'Usuário Criado Com Sucesso!');
      } else {

         return redirect()
            ->route('users.create')
            ->withErrors('Esse E-Mail Já Existe! Tente Outro E-Mail Válido');
      }
   }

   public function show($id)
   {
      if ($id != auth()->user()->id) {

         $user_checking = User::findOrFail($id);

         $user_roles = User::find($id)->roles;

         return view('users.showUser', [
            'user_checking' => $user_checking,
            'user_roles' => $user_roles
         ]);
      } else {
         return redirect()->route('dashboard');
      }
   }

   public function showUsers()
   {
      $all_users = User::where('id', '<>', auth()->user()->id)->paginate(5);

      return view('users.showUsers', ['all_users' => $all_users]);
   }

   public function edit($id)
   {
      $user_checking = User::findOrFail($id);

      $user_roles = User::find($id)->roles;

      return view('users.userEdit', [
         'user_checking' => $user_checking,
         'user_roles' => $user_roles
      ]);
   }

   public function update(FormValidationRequest $request)
   {
      $request->validated();

      if ($request->password) {

         $data = $request->except('niveis');
         $data['password'] = Hash::make($data['password']);
      } else {
         $data = $request->except(['niveis', 'password']);
      }

      User::findOrFail($request->id)
         ->syncRoles($request['niveis'])
         ->update($data);

      return redirect()
         ->route('users.edit')
         ->with('msg', 'Usuário Foi Atualizado Com Sucesso!');
   }

   public function destroy($id)
   {
      $username = User::findOrFail($id)->name;

      User::findOrFail($id)->delete();

      return redirect()
         ->route('users.delete')
         ->with('msg', "O Usuário {$username} Foi Apagado Com Sucesso!");
   }
}
