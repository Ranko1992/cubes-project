<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index(){
        
        $allCars = Cars::orderBy('created_at', 'desc')->paginate(10);
        
        return view('front.cars.index',[
            'allCars' =>$allCars
        ]);
    }
}
