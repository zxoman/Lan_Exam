<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function index(Request $request) {
        $id = $request->input('id');

        $question = DB::table('questions')->select()->where(['id'=>$id])->get();
        return view('edit',['question' => $question[0] ]);
    }
    public function edit(){

    }

}
