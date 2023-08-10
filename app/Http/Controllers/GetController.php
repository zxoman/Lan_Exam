<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetController extends Controller
{
    public function index()  {

        //$questions = DB::table('questions')->get();
        $questions = [];
        return view('data',["questions" => $questions]);
    }
    public function get(Request $request) {
        $post_data = $request->all();
        unset($post_data['_token']);
        foreach ($post_data as $key => $value) {
            if (empty($value)) {
                unset($post_data[$key]);
            }
        }
        if(!empty($post_data['id'])){
            $post_data = ['id' => $post_data['id']];
        }
        $questions = DB::table('questions')->select()->where($post_data)->get();
        return view('data',["questions" => $questions]);

    }
}
