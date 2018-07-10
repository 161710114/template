<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
        // if (Laratrust::hasRole('Super Admin')) return $this->adminDasboard();
        // if (Laratrust::hasRole('Admin')) return $this->memberdasboard();
    }

    // protected function adminDasboard()
    // {
    //         return view('home');
    // }

    //     protected function memberdasboard()
    // {
    //         return view('welcome');
    // }


}
