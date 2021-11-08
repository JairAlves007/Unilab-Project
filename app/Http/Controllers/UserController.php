<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormValidationRequest;
use App\Models\Institutes;
use App\Models\Projects;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{

   public function form_registration()
   {

      if (auth()->user()->can_access == 0) {

         if (Route::currentRouteName() === 'users.registration.orientador') {

            $institutes = Institutes::all();

            return view('users.formRegistration', [
               'institutes' => $institutes
            ]);
         } else {

            return view('users.formRegistration');
         }
      } else {

         return redirect()->route('dashboard');
      }
   }

   public function registration(Request $request)
   {
      $data = $request->all();

      if (isset($data['institutes_id'])) {

         $check_if_registration_exists = Teachers::where('registration', $data['registration']);

         if ($check_if_registration_exists) {

            return redirect()->back()->withErrors('registration_orientador', 'Essa Matrícula Já Existe, Cadastre Outra!');
         } else {
            Teachers::create([
               'registration' => $data['registration'],
               'institutes_id' => $data['institutes_id'],
               'users_id' => auth()->user()->id
            ]);
         }
      } else {

         $check_if_registration_exists = Students::where('registration', $data['registration']);

         if ($check_if_registration_exists) {

            return redirect()->back()->withErrors('registration_bolsista', 'Essa Matrícula Já Existe, Cadastre Outra!');
         } else {

            Students::create([
               'registration' => $data['registration'],
               'users_id' => auth()->user()->id
            ]);
         }
      }

      User::where('id', auth()->user()->id)->update([
         'can_access' => 1
      ]);

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
         if (
            in_array('bolsista', $data['niveis']) &&
            in_array('orientador', $data['niveis'])
         ) {

            return redirect()->back()->withErrors('bolsista_and_orientador', 'Você Não Pode Ser Bolsista E Orientador Ao Mesmo Tempo');
         } else if (
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

      // dd(User::findOrFail($id)->hasRole('bolsista'));

      // dd(User::findOrFail($id)->projectsAsParticipant);
      $checking_if_user_is_participating_a_project = DB::table('projects_user')
         ->where('projects_user.user_id', $id)
         ->where('participating', 1)
         ->get();

      $checking_if_user_is_owner_project = Teachers::where('users_id', $id)->get();

      if(count($checking_if_user_is_participating_a_project) > 0) {

         return redirect()->back()->withErrors('participating_a_project', 'Esse Usuário Está Em Um Projeto, Desvincule Ele Do Projeto E Depois O Exclua');
   
      } else if (count($checking_if_user_is_owner_project) > 0) {

         return redirect()->back()->withErrors('owner_project', 'Esse Usuário É Dono DE Um Projeto, Desvincule Ele Do Projeto E Depois O Exclua');
      
      }

      User::findOrFail($id)->delete();

      return redirect()
         ->route('users.delete')
         ->with('msg', "O Usuário {$username} Foi Apagado Com Sucesso!");
   }
}
