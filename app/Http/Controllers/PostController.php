<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;
use App\Models\posts;


class PostController extends Controller
{
    //

    // ページ表示
    public function index(Request $request) {

        $users = People::with(['posts'])->get();

        $authors = People::with(['books'])->get();

        return view('post.index',[
            'users' => $users,
            'authors' => $authors
        ]);
    }

}
