<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoconferenceController extends Controller
{
    public function index()
    {
        return view('videoconference.index');
    }
}
