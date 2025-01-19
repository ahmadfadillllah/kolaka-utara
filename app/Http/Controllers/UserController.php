<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('dashboard.users.index', compact('user'));
    }

    public function resetPassword($id)
    {
        $user = User::where('id', $id)->first();
        try {
            User::where('id', $id)->update([
                'password' => Hash::make('12345'),
            ]);

            return redirect()->back()->with('success', 'Reset password berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Reset password gagal...\n' . $th->getMessage()));
        }
    }

    public function statusEnabled($id)
    {
        $user = User::where('id', $id)->first();

        try {
            if($user->statusenabled == true){

                User::where('id', $id)->update([
                    'statusenabled' => false,
                ]);


            }else{
                User::where('id', $id)->update([
                    'statusenabled' => true,
                ]);

            }

            return redirect()->back()->with('success', 'Ubah status berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Ubah status gagal...\n' . $th->getMessage()));
        }
    }
}
