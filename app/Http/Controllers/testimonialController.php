<?php

namespace App\Http\Controllers;
use App\Models\testimonial;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class testimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = DB::select('select * from testimonials');
       return view('layouts.backend.all_testimonial',['users'=>$users]);                         
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
      return view('layouts.backend.testimonial'); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
    $cover = $request->file('image');
    $extension = $cover->getClientOriginalExtension();
    $filename = $cover->getFilename().'.'.$extension;
    Storage::disk('public')->putFileAs('images', $cover, $filename);
    $task = testimonial::create(['name' => $request->name,'profession' => $request->profession,'description' => $request->description,'rating' => $request->rating,'image' =>$filename]);
        return redirect('/all_testimonial/create')->with('success', 'Contact saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    DB::delete('delete from testimonials where id = ?',[$id]);
    return redirect()->back()->withErrors(['Deleted Successfully', 'The Message']); 
    //return Redirect::back()->withErrors(['msg', 'The Message']);
    //return view('layouts.backend.testimonial'); 
    }
}
