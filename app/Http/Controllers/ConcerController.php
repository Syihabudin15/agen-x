<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concer;


class ConcerController extends Controller
{
    public function index(){
        return view('main', [
            "data" => Concer::all()
        ]);
    }
    public function all(){
        return view('listConcer', [
            "data" => Concer::all()
        ]);
    }
}
