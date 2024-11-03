<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class studentController extends Controller
{
    public function showStudents(){
        $users = DB::table('students')->get();

        return view('students', ['data' => $users]);
    }

    public function singleUser($id){
        $user = User::find($id);

        return view('student', ['user' => $user]);
    }
}
