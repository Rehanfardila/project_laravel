<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tampil()
    {
        return view('celanapanjang');
    }

    public function seprei1()
    {
        return view('seprei');
    }


    public function handuk2()
    {
        return view('handuk');
    }


    public function yamaha()
    {
        return view('yamaha');
    }

    public function honda()
    {
        return view('honda');
    }

    public function suzuki()
    {
        return view('suzuki');
    }

    public function home()
    {
        return view('beranda');
    }

    public function arsenal1()
    {
        return view('arsenal');
    }

    public function about()
    {
        return view('about');
    }

    public function data_ktp()
    {
        return view('ktp');
    }

    public function bajubaru()
    {
        return view('baju');
    }

    public function ktp1()
    {
        return view('hktp');
    }


    public function ps4()
    {
        return view('ps');
    }

    public function login1()
    {
        return view('login');
    }
}
