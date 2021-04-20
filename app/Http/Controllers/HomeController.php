<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   function ShowHome(){
       return view('home');
   }
   
   function ShowAbout(){
       return view('about');
   }
   function ShowContact(){
       return view('contact');
   }
   function ShowCourses(){
       return view('courses');
   }
   function ShowEvents(){
       return view('events');
   }

}
