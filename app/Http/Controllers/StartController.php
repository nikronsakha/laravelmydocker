<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class StartController extends Controller
{
    public function index(){
        dump(app()->make('cache'));
        return view('main');
    }
}
