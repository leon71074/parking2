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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function savesession(Request $request)
    {
        session(['wellcome' => 'hello world']);
        $request->session()->put('ary', []);
        return '已儲存';
    }
    public function getsession(Request $request)
    {

        // dd($request->session()->get('wellcome', 'not found'));
        // dd($request->session()->get('ary', 'not found'));
        // dd($request->session()->all();
        $ary = $request->session()->pull('ary', 2);
        dd($ary);
    }
    public function flashsession(Request $request)
    {
        $request->session()->flash('flashkey', 'hello');
        return '已儲存 flash data';
    }
    public function pushsession(Request $request)
    {
        $request->session()->push('ary', 'ps4');
        return '已增加';
    }
    public function hasSession(Request $request)
    {
        dd($request->session()->has('wellcome'));
    }
    public function allSession(Request $request)
    {
        dd($request->session()->all());
    }
}
