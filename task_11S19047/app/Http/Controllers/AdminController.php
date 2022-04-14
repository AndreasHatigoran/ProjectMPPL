<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show all pelanggaran
    public function listpelanggaran()
    {
        return view('administrator.listpelanggaran');
    }
    //list akun yang akan di verifikasi
    public function akun()
    {
        $users = User::where('isadmin', 0)->where('isverify', 0)->get();
        return view('administrator.listakun', compact('users'));
    }

    //membuat akun terverifikasi
    public function makeVerify(User $user){
        $user->isverify =true;
        $user->save();
        session()->flash('success', $user->fullname.' Berhasil verifikasi');
        return redirect(route('administrator.listakun'));
    }
}
