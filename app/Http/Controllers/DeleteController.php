<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function delete(Request $request)  {
        $id = $request->input('id');
        DB::table('questions')->where(['id'=> $id])->delete();
        return redirect('/');
    }
}
