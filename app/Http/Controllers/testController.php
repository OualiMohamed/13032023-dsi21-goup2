<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class testController extends Controller
{
    //
    public function tester() {
        $TestModel = new Test;
        $message = $TestModel->testMessage(); //

        return view('test', ["msg" => $message]);
    }
}
