<?php

namespace App\Http\Controllers;

use App\User;
use App\Level;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function user()
    {
        $users = User::paginate(5);
        return view('user.user', ['users' => $users]);
    }

    public function adduser()
    {
        $users = User::all();
        $level = Level::pluck('name', 'id');

        return view('user.adduser', ['users' => $users, 'level' => $level]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => ['required', 'string', 'min:8'],
            'level' => 'nullable'
        ]);

        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'level' => $data['level'],
            'tlp' => $data['tlp'],
        ]);
        return redirect('/users')->with('sukses', 'Data Berhasil Di Input!');
    }
    public function edituser($id)
    {
        $level = Level::pluck('name', 'id');

        $user = User::find($id);

        return view('user.editUser', ['user' => $user, 'level' => $level]);
    }

    public function update(Request $request, $id)
    {
        $errors = new \Illuminate\Support\MessageBag();
        $errors->add('Error', 'Konfirmasi password tidak sama');

        $user = User::find($id);
        $level = Level::pluck('name', 'id');
        if ($request->password != $request->syncpassword) {
            return redirect()->back()->withErrors($errors);;
            return view('user.editUser', ['user' => $user, 'level' => $level])->with('error', 'Password tidak sama');
        } else if ($request->password == '') {
            $user->update($request->except('password'));
        } else {
            $pass =  Hash::make($request->password);
            $user->update($request->except('password'));
            $user->password = $pass;
            $user->save();
        }
        return redirect('/users')->with('sukses', 'Data Berhasil Di Update!');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('/users')->with('sukses', 'Data berhasil dihapus!');
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $users = User::where('name', 'like', "%" . $cari . "%")->paginate(5);
        // return $users->link;
        return view('user.user', ['users' => $users]);
    }
}
