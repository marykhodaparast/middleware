<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->session()->put(['edwin' => 'master instructor']);
        //session(['peter' => 'student']);//it is the global function session
        //return session('peter');
        //echo $request->session()->get('edwin');
        //$request->session()->forget('peter');
//        $request->session()->flush();
//        return $request->session()->all();
        //return view('home');
        //$request->session()->flash('message','Post has been created');
        //return $request->session()->get('message');//after we comment flash the flashed data is gone
        //$request->session()->reflash();//use this or keep to keep the data
        //$request->session()->keep('message');
    }
}
