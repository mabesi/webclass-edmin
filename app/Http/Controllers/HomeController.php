<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;

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
        $totalCourses = User::count();
        $totalCategories = count(getCategories());

        $data = [
          'totalPupil' => $totalPupil,
          'totalCategories' => $totalCategories,
          'totalCourses' => $totalCourses,
        ];
        return view('home',$data);
    }

    public function categories()
    {
      $categories = getCategories();
      $data = [
        'categories' => $categories,
      ];
      return view('category.list',$data);
    }
}
