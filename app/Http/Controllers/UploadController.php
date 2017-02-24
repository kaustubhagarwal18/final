<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index()
    {

      return view('upload');
    }

    public function store(request $request)
    {
      //return 'this is store';
             if($request->hasFile('video')){   // if no file selected
        $request-> file('video');  // returns path of file in store page


 
       return  $request -> video->store('public');
       //echo 
       } else{
        return 'No file selected';
       } // returns the path , saves in public folder of storeage-> app
    }

}

