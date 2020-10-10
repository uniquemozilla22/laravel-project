<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to the Laravel Index Page";
        return view('pages.index',compact('title'));
    } 
    public function about(){
        $titles="This is the about section";
        return view('pages.about')->with('title',$titles);
    }

    public function services(){
        $data=array(
            'title'=>'services',
            'description'=>'Welcome to the service page.',
            'services'=> ['website devvelopment','App Development','Database handler']
        );
        return view('pages.services')->with($data);
    }
}
