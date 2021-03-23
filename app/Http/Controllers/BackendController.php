<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    public function testimonial(){
        return view('layouts.backend.testimonial');
    }
    public function cards(){
        return view('layouts.backend.cards');
    }
    public function blank(){
        return view('layouts.backend.blank');
    }
    public function tables(){
        return view('layouts.backend.tables');
    }
    public function buttons(){
        return view('layouts.backend.buttons');
    }
    public function profile(){
        $users = DB::table('users')->select('id','name','email','password')->get();
        return view('layouts.backend.profile',['users'=>$users]);
    }
    public function utilities_animation(){
        return view('layouts.backend.utilities_animation');
    }
    public function utilities_border(){
        return view('layouts.backend.utilities_border');
    }
    public function utilities_color(){
        return view('layouts.backend.utilities_color');
    }
    public function utilities_other(){
        return view('layouts.backend.utilities_other');
    }
    public function forgot_password(){
        return view('layouts.backend.forgot_password');
    }
}
