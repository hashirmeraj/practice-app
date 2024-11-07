<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function showStudents(){
        $users = DB::table('students')->paginate(5);

        return view('students', ['data' => $users]);
    }

    public function singleUser($id){
        $user = DB::table('students')->find($id);

        return view('student', ['users' => $user]);
    }

    public function deleteUser($id){
        $user = DB::table('students') 
        -> where('id', $id)
        ->delete();

        if ($user) {
            return Redirect::to('/students');
        }
    }

    public function store(Request $req){
        
        $user = DB::table('students')
        ->insert([
            'Name' => $req->userName,
            'Email' => $req->userEmail,
            'City' => $req->userCity
        ]);

        if ($user) {
            return Redirect::to('/students');
        }
    }
}
