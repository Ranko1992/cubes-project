<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slep;

class SlepController extends Controller
{
    public function index(){
        $favors = Slep::orderBy('price')->get();
      dd($favors);
        return view('admin.slep-sluzba.index',[
            'favors' => $favors
        ]);
    }
}
