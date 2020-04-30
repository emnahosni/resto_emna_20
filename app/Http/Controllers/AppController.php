<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Meal;
class AppController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
        return view('welcome', compact('meals'));
    }
    public function home()
    {
        return view('home');
    }
    // public function about()
    // {
    //     //passage de variable entre Controller & View
    //     $email = 'dai22g1@index.com';
        
    //     //1st method
    //     // return view('about', ['email' => $email]);
        
    //     //2nd method
    //     // return view('about', compact('email'));
        
    //     //3rd method
    //     return view('about')->with('email', $email);
    // }
    
    // public function team()
    // {
    //     // $members = [
    //     //     [
    //     //         'name' => 'Mohamed',
    //     //         'age' => 20,
    //     //         'email' => 'mohamed@example.com'
    //     //     ],
    //     //     [
    //     //         'name' => 'Ahmed',
    //     //         'age' => 20,
    //     //         'email' => 'Ahmed@example.com'
    //     //     ],
    //     //     [
    //     //         'name' => 'Nizar',
    //     //         'age' => 20,
    //     //         'email' => 'Nizar@example.com'
    //     //     ]
    //     // ];
    //     $members = Member::all();
    //     return view('team', ['members' => $members]);
    // }
}
