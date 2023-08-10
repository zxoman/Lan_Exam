<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //
    public function index()
    {
        $questions = [];

        return view('create', ["questions" => $questions]);
    }
    public function get(Request $request)
    {
        $post_data = $request->all();
        unset($post_data['_token']);
        foreach ($post_data as $key => $value) {
            if (empty($value)) {
                unset($post_data[$key]);
            }
        }
        $post_data['type_a'] = "choices";
        $questions = DB::table('questions')->select()->where($post_data)->get();
        return view('create', ["questions" => $questions]);
    }
    public function create(Request $request)
    {
        $request->validate([
            "exam" => "required",
            "name" => "required",
            "number" => "required"
        ]);
        $post_data = $request->all();
        unset($post_data['_token']);
        unset($post_data['_method']);
        DB::table("exams")->insert($post_data);
        return redirect('/exams');
    }
    public function exams()
    {
        $exams = DB::table('exams')->get();
        return view('exams', ["exams" => $exams]);
    }
    public function qr(Request $request)
    {
        $id = $request->input('id');
        $localIP = getHostByName(getHostName());
        return view('qr', ["id" => $id, "ip" => $localIP]);
    }
    public function scanner()
    {
        return view('qr.qr');
    }
    public function get_exam(Request $request)
    {
        $id = $request->input('id');
        $exam = DB::table('exams')->select()->where(["id" => $id])->get();
        $exam = $exam[0];
        $ids_temp = explode(",", $exam->exam);
        $ids = [];
        foreach ($ids_temp as $value) {
            if (!empty($value))
                $ids[] = $value;
        }
        $keys = array_rand($ids,20);
        $questions = [];
        foreach ($keys as $key) {
            $question_id = $ids[$key];
            $question = DB::table('questions')->select()->where(["id" => $question_id])->get();
            $questions[] = $question[0];
        }
        return view('exam.new',['questions' => $questions,"exam_id" => $id]);
    }
}
