<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function showStudents(){
        $users = DB::table('students')->get();

        return view('allstudents', ['data' => $users]);
    }
}
