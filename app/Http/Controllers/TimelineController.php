<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimelineController extends Controller
{
    //
    public function getTimeline(Type $var = null)
    {
        $data = DB::table('timelines')->get();
        return view('timeline', ['data' => $data]);
    }
}
