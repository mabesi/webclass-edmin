<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $totalPupil = User::where('type','U')->count();
        $totalCategories = getCategories();
        $data = [
          'totalPupil' => $totalPupil,
          'totalCategories' => count($totalCategories),
        ];
        return view('home',$data);
    }
}
