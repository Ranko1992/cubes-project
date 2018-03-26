<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trailors;

class TrailorsController extends Controller
{
    public function index(){
        $trailors = Trailors::orderBy('created_at')->paginate(5);
        return view('front.slep-sluzba.index',[
            'trailors' => $trailors
        ]);
    }
}
