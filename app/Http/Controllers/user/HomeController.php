<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $majors = Major::inRandomOrder()
        ->limit(5)
        ->get();

        $doctors = Doctor::with('major')
        ->inRandomOrder()
        ->limit(8)
        ->get();

        return view('front.pages.home', compact('majors', 'doctors'));
    }
}
