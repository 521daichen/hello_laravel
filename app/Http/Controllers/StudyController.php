<?php

namespace App\Http\Controllers;

use App\Models\Studys;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyController extends Controller
{
    //
    public function show()
    {
        $contents = Studys::all();

        return view('study.show',compact('contents'));
    }

    public function content($id)
    {
        //查找教程传递给view
        $content = Studys::findOrFail($id);
        return view('study.content',compact('content'));
    }
}
