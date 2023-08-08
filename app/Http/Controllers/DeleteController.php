<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function delete(Request $request)  {
        $id = $request->input('id');
        DB::table('users')->where(['id'=> $id])->delete();
    }
}
