<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm(){
        return view('register');
    }

    public function handleForm(Request $request){
        $customMessages = [
            'name.required' => 'kami perlu tahu nama anda!',
            'email.required' => 'Email anda penting bagi kami!',
            'email.email' => 'Hmm... itu tidak terlihat sprti email yg valid.',
            'password.required' => 'Jangan lupa set password nya.',
            'password.min' => 'password harus minimal :min karakter',
            'username.regex' => 'username hanya boleh berisi huruf dan angka',
        ];

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'username' => ['required', 'regex:/^[a-zA-Z0-9]+$/'],
            'password' => 'required|min:6',
        ], $customMessages);

        return redirect()->route('register.show')->with('success', 'registrasi berhasil');
    }
}
