<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index(){
        
        $allCars = Cars::orderBy('created_at', 'desc')->paginate(10);
        
        return view('front.cars.car',[
            'allCars' =>$allCars
        ]);
    }
    
    public function oneCar($id) {
		
		$car = Cars::findOrFail($id);
		
		return view('front.cars.one-car', [
			'car' => $car
		]);
	}
}
