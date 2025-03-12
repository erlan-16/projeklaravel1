<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() 
    {
        $profile = [
            'name' => 'Erlan Eka Putra Susanto',
            'email' => 'erlaneka005@gmail.com',
            'bio' => 'Siswa SMKN 1 Sayung',
            'profile_picture' => 'Bung_amba.webp',
            'skills' => ['Masak','Kiper','Pasang Lampu','Pasang gas']
        ];
        return view('profile', compact('profile'));
    }

    public function home() 
    {
        return view('home');
    }

    public function about() 
    {
        return view('about');
    }

    public function contact() 
    {
        return view('contact');
    }
}
