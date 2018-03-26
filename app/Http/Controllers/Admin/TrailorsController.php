<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trailors;

class TrailorsController extends Controller
{
    public function index(){
        $trailors = Trailors::orderBy('title')->get();
    
    return view('admin.slep-sluzba.index',[
        'trailors' => $trailors
    ]);
}
//***************************ADD************************************************
  public function add() {
        return view('admin.slep-sluzba.add');
    }
    
     public function insert() {
        $request = request();
        $formData = $request->validate([
            'title' => 'required|string|min:2|max:20',
            'trailor_photo_file' => 'required|image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
            'description' => 'required|string|min:10|max:10000',
            'price' => 'present'
        ]);
        
        $trailor = new Trailors($formData);
        $trailor->save();
        
        if($request->hasFile('trailor_photo_file')){
            $uploadedFile = $request->file('trailor_photo_file');

            $publicStorage = \Storage::disk('public');

            $newFileName = $trailor->id . '_' . $uploadedFile->getClientOriginalName();

            $uploadedFile->storeAs('/trailors', $newFileName, 'public');

            //update new file name in database
            $trailor->photo_filename = $newFileName;
            $trailor->save();
        }
         return redirect()
                        ->route('admin.slep-sluzba.index')
                        ->with('systemMessage', 'Trailor has been added');
    }
    
//****************************EDIT**********************************************
    
    public function edit($id) {
        $trailor = Trailors::findOrFail($id);
        return view('admin.slep-sluzba.edit',[
           'trailor'=>$trailor 
        ]);
    }
    
      public function update($id) {
        $trailor = Trailors::findOrFail($id);
        $request = request();
        $formData = $request->validate([
            'title' => 'required|string|min:2|max:20',
            'trailor_photo_file' => 'image|mimes:jpeg|max:10240|dimensions:min_width=100,min_height=100',
            'description' => 'required|string|min:10|max:10000',
            'price' => 'present'
        ]);
        
        $trailor->fill($formData);
        $trailor->save();
        
          if ($request->hasFile('trailor_photo_file')) {
            $uploadedFile = $request->file('trailor_photo_file');

            $publicStorage = \Storage::disk('public');

            if ($trailor->photo_filename && $publicStorage->exists('/trailors' . $trailor->photo_filename)) {
                $publicStorage->delete('/trailors' . $trailor->photo_filename);
            }
            $newFileName = $trailor->id . '_' . $uploadedFile->getClientOriginalName();

            $uploadedFile->storeAs('/trailors', $newFileName, 'public');
            $trailor->photo_filename = $newFileName;
            $trailor->save();
        }
        return redirect()
                ->route('admin.slep-sluzba.index')
                ->with('systemMessage', 'Trailor has been succesfully edited');
    
      }
      
//************************DELETE************************************************
 public function delete() {
        $request = request();

        $trailor = Trailors::findOrFail($request->input('id'));
        $trailor->delete();

        if ($trailor->photo_filename && \Storage::disk('public')->exists('/trailors/' . $trailor->photo_filename)) {
            \Storage::disk('public')->delete('/trailors/' . $trailor->photo_filename);
        } 
        return redirect()
                ->route('admin.slep-sluzba.index')
                ->with('systemMessage', 'Trailor has been succesfully edited');
 }
}