<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\People;

class ParsonController extends Controller
{
    public function index(Request $request) {
        
        $item = People::all();

        $test = DB::select('select name from people');

        $param = People::where('name','taro2')->first();

        return view('person.index',[
            'items' => $item,
            'tests' => $test,
            'param' => $param]);

    }
}
