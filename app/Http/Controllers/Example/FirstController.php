<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class FirstController extends Controller
{
    //__index method
    static function index()  {
        // dd(app());
        Auth::id(); //1,2,3,4
        return view('contact');
    }
    static function aboutIndex()  {
        // dd(app());

        return view('about');

        //__ HTTP Response__\\
        // return response("Hello World");
    }

    // __student__store //

    public  function Studentstore (Request $request )  {
        
        // dd($request->email);
        // dd($request->collect());

        //__Array__\\
        // $data = array();
        // $data['name']=$request->name;
        // $data['email']=$request->email;
        // $data['Phone']=$request->phone;
        // dd($data);
        
        //data store
        // return redirect('/');
        // return redirect()->route('about.us');
        // return redirect()->away('http://www.facebook.com');
        // return redirect()->back()->with('success', 'student inserted');
        // return redirect()->action([SecondController::class, 'test']);
    }
    // __student__store //

    public  function aboutstore (Request $request)  {
        
        // dd($request->all());

    }


    // store contact 

    public function store( Request $request)  {
        $validated = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|unique:users|max:255|email',
            'password' => 'required|min:6|max:12',
        ]);
        dd(request()->all());

    }


    // laravel Method

    // public function laravel ()  {
        
    //     // return view('laravel');
    //     if (view()->exists('page.laravel')) {
            
    //         return View::make('page.laravel', ['name'=> 'James']);
    //     }

    //  else {
    //     echo "not avaiable";
    // } 


//    }
}