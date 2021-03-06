<?php

namespace App\Http\Controllers;

use App\Models\Convertion;
use Illuminate\Http\Request;
use Auth;

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
        $data['popularDestination'] = Convertion::max('to_currency');
        $data['totalRequest'] = Convertion::get()->count();
        $data['convertedAmount'] = Convertion::sum('base_amount');
        return view('home',$data);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
