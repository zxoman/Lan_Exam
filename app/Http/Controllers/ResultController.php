<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index()  {
        return view('result');
    }
    public function get_results(Request $request) {
        $id = $request->input('id');
        $results = DB::table('results')->select()->where(["exam"=>$id])->get();
        $exam = DB::table('exams')->select()->where(["id"=>$id])->get();
        return view('result-dashboard',["results" => $results,"exam"=>$exam]);
    }
    public function add_results(Request $request) {
        $post_data = $request->all();
        unset($post_data['_token']);
        DB::table("results")->insert($post_data);

    }
}
