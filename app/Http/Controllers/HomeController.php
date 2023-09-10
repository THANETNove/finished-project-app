<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('performances')
            ->where('performances.id_user', Auth::user()->id)
            ->leftJoin('class_type', 'performances.std_class', '=', 'class_type.id')
            ->leftJoin('term_type', 'performances.term', '=', 'term_type.id')
            ->leftJoin('major_type', 'performances.std_major', '=', 'major_type.id')
            ->leftJoin('branch_type', 'performances.std_typesubject', '=', 'branch_type.id')
            ->select(
                'performances.*',
                'class_type.name AS class_name',
                'term_type.name AS term_name',
                'major_type.name AS major_name',
                'branch_type.name AS branch_name'
            )
            ->get();

        return view('home', compact('data'));
    }
}