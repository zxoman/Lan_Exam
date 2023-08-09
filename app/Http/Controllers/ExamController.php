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
    public function create(Request $request) {
        $request->validate([
            "exam" => "required",
            "name" => "required",
            "number" => "required"
        ]);
        $post_data = $request->all();
        unset($post_data['_token']);
        unset($post_data['_method']);
        DB::table("exams")->insert($post_data);

    }
    public function exams() {
        $exams = DB::table('exams')->get();
        return view('exams',["exams" => $exams]);

    }
    public function qr(Request $request){
        $id = $request->input('id');
        $localIP = getHostByName(getHostName());
        return view('qr',["id"=>$id,"ip"=>$localIP]);

    }
    public function scanner() {
        return view('qr.qr');
    }
}
