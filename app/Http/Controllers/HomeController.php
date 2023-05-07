<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home (){
        $users=[
            ['id'=>'1','nom'=>'Naciri','metier'=>'Expert technique'],
            ['id'=>'1','nom'=>'saidi','metier'=>'Directeur'],
            ['id'=>'1','nom'=>'salimi','metier'=>'Jardinier'],
        ];
        return view('home',compact('users'));        
    }
    
    public function hello (){
        return view('Hello');        
    }

    public function article (){
        return view('article');        
    }
}
