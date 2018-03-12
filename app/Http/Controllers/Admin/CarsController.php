<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index() {
		
		$cars = Cars::orderBy('title', 'desc')->get();
		
		return view('admin.cars.index', [
			'cars' => $cars
		]);
	}
	
        
        
         public function add() {
            return view('admin.cars.add');
	}
}
