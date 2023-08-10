<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    public function index()  {
        return view('add');
    }
    public function add(Request $request){
        $post_data = $request->all();
        unset($post_data['_token']);
        $post_data['image'] = "";
        $post_data['type_q'] = "text";
        $post_data['type_a'] = "choices";
        DB::table("questions")->insert($post_data);
        return redirect('/add');
    }
}
