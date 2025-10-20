<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function home(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Selamat datang di Laravel UI Integrated Demo!';
        $features = [
            'Partial Views',
            'Blade Components', 
            'Theme Switching',
            'Bootstrap 5',
            'Responsive Design'
        ];
        
        return view('home', compact('theme', 'alertMessage', 'features'));
    }

    public function about(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Halaman ini menggunakan Partial Views!';
        $team = [
            ['name' => 'M. Iqbal Sayuti', 'role' => 'Senior Developer'],
            ['name' => 'Fathan Mubina', 'role' => 'Game Developer'],
            ['name' => 'Hafidz Maulana', 'role' => 'Backend Developer'],
            ['name' => 'Hayzar Muhaiyar', 'role' => 'UI/UX Designer'],
            ['name' => 'Faizul Abrar', 'role' => 'Product Manager'],
            ['name' => 'Alvi Syahril', 'role' => 'QA Engineer'],
            ['name' => 'Faqriyadi Andika', 'role' => 'DevOps Engineer']
        ];
        
        return view('about', compact('theme', 'alertMessage', 'team'));
    }

    public function contact(Request $request)
    {
        $theme = session('theme', 'light');
        $departments = [
            'Technical Support',
            'Sales',
            'Billing',
            'General Inquiry'
        ];
        
        return view('contact', compact('theme', 'departments'));
    }

    public function profile(Request $request)
    {
        $theme = session('theme', 'light');
        $user = [
            'name' => 'Iqbal',
            'email' => 'iqbalsayuti0@example.com',
            'join_date' => '12-09-1945',
            'preferences' => ['Email Notifications', 'Dark Mode', 'Newsletter']
        ];
        
        return view('profile', compact('theme', 'user'));
    }

   public function switchTheme($theme, Request $request)
{
    if (in_array($theme, ['light', 'dark'])) {
        session(['theme' => $theme]);
    }

    return back();
}
}
