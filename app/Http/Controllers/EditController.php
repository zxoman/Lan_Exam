<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');

        $question = DB::table('questions')->select()->where(['id' => $id])->get();
        return view('edit', ['question' => $question[0]]);
    }
    public function edit(Request $request)
    {
        $post_data = $request->all();
        unset($post_data['_token']);
        unset($post_data['id']);
        $id = $request->input('id');
        foreach ($post_data as $key => $value) {
            if (empty($value)) {
                unset($post_data[$key]);
            }
        }
        // dd($post_data);
        $result = DB::table('questions')
            ->where('id', $id)
            ->update($post_data);
        return redirect('/edit?id='.$id);
    }
}
