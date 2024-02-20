<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //基本は public function アクション()
    public function add()
    {
        return view('admin.exam.create');
    }
}
