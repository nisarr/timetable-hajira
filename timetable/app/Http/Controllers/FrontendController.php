<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
    return view('frontend.home');
    }
    
    //about
    public function about(){
        return view('frontend.home.about');
    }

    //contact
    public function contact(){
        return view('frontend.home.contact');
    }

   

}

   
