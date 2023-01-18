<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    // View form to upload image
    public function index()
    {
        dump(session());
        return view('image-form');
    }

    // Store image
    public function storeImage(Request $request)
    {
        // dd($request->all());
        dump(session());

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:4096'
        ]);

        // store image file in public folger
        $path = $request->image->store('images', 'public');
        
        // redirect to previous location
        return back()->with('success', 'Image uploaded successfully!')->with('image', $path);
        
    }
}
