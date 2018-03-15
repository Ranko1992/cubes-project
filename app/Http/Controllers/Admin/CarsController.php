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
        
        public function insert(){
                $request = request();
            
            	$formData = $request->validate([
                    'title' => 'required|string|min:2|max:20',
                    'model'=> 'required|string|min:2|max:20',
                    'production_year' => 'required|string|min:4|max:4',
                    'miles'=>'required|string|min:2|max:7',
                    'power'=>'required|string|min:2|max:12',
                    'fuel'=>'required|string|min:2|max:12',
                    'car_photo_file'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'car_photo_file_1'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'car_photo_file_2'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'car_photo_file_3'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'car_photo_file_4'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'car_photo_file_5'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'car_photo_file_6'=>'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
                    'description'=>'required|string|min:10|max:10000',
                    'specification'=>'required|string|min:10|max:10000',
                    'price'=>'present'
		]);
		
		$car = new Cars($formData);
		
		$car->save();
		
                	if ($request->hasFile('car_photo_file')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename = $newFileName;
			$car->save();
		}
                	if ($request->hasFile('car_photo_file_1')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file_1');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename_1 = $newFileName;
			$car->save();
		}
                	if ($request->hasFile('car_photo_file')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file_2');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename_2 = $newFileName;
			$car->save();
		}
                	if ($request->hasFile('car_photo_file')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file_3');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename_3 = $newFileName;
			$car->save();
		}
                	if ($request->hasFile('car_photo_file')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file_4');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename_4 = $newFileName;
			$car->save();
		}
                	if ($request->hasFile('car_photo_file_5')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename_5 = $newFileName;
			$car->save();
		}
                	if ($request->hasFile('car_photo_file')) {
			
			// new uploaded file
			$uploadedFile = $request->file('car_photo_file_6');
			
			$publicStorage = \Storage::disk('public');
			
			$newFileName = $car->id . '_' . $uploadedFile->getClientOriginalName();
			
			$uploadedFile->storeAs('/cars', $newFileName, 'public');
			
			//update new file name in database
			$car->photo_filename_6 = $newFileName;
			$car->save();
		}
		return redirect()
				->route('admin.cars.index')
				->with('systemMessage', 'Car has been added');
	
	
        }
        
        public function edit($id){
            
            $car = Cars::findOrFail($id);
           
            return view('admin.cars.edit',[
                'car' =>$car
            ]);
        }
}
