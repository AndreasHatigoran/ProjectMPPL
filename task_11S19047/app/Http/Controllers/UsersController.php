<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UsersController extends Controller
{

    public function showprofile($username){
        $user = User::where('username', $username)->first();
        /*dd ($user);*/

        return view('users.profile', compact('user'));
    }

    public function update(Request $request, $username){
        $user = User::where('username', $username)->first();

        $request->validate([
            'username' => 'required|alpha_dash|min:3|max:15|unique:users,username,' . $user->id,
            'fullname' => 'max:30',
            'avatar' => 'image|mimes:jpeg,jpg,png'
        ]);

        $imageName = $user->avatar;

        if ($request->avatar) {
            $avatar_img = $request->avatar;
            $imageName = $user->username . '-' . time() . '.' . $avatar_img->extension();
            $avatar_img->move(public_path('image/avatar'), $imageName);
        }

        $user->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'avatar' => $imageName
         ]);
         return redirect('/@' . $user->username);
    }

    public function edit(){
        return view('users.edit');
    }

    public function index()
    {
        return view('users.index')->with('users', User::all());
    }
}
