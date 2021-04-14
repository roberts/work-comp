<?php

namespace Roberts\WorkComp\Http\Controllers;

use Illuminate\Routing\Controller;
use Roberts\WorkComp\Models\ClassCode;

class ClassCodesController extends Controller
{
    public function show(ClassCode $classCode)
    {
        return view('class_codes.show', compact('classCode'));
    }
}
