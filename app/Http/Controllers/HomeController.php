<?php

namespace App\Http\Controllers;

use \Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use \Kordy\Ticketit\Models\Agent;

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
     * Show the application homePage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->UserisAdmin())
        {
            return view('homeAdmin');
        }

        if(Agent::isAgent() && !(Auth::user()->UserisAdmin()))
        {
           return view('homeAgent');
        }

        if (!Agent::isAgent() && !Auth::user()->UserisAdmin())
        {
            return view('home');
        }

    }

}
