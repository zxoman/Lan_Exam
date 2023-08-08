<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //
    public function index() {
        $questions = [];

        return view('create',["questions" => $questions]);
    }
    public function get(Request $request) {
        $post_data = $request->all();
        unset($post_data['_token']);
        foreach ($post_data as $key => $value) {
            if (empty($value)) {
                unset($post_data[$key]);
            }
        }
        $questions = DB::table('questions')->select()->where($post_data)->get();
        return view('create',["questions" => $questions]);

    }
}
