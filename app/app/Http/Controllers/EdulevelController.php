<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdulevelController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('edulevels')->get();

        return $edulevels;
        return view('edulevel.data', ['edulevels' => $edulevels]);
    }

    public function add()
    {
        return view('edulevel.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('edulevels')->insert([
            'name' -> $request->name,
            'desc' -> $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil ditambah!');
    }
}