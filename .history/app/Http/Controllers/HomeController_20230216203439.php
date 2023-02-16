<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $services = Service::all();
        return view('pages.home', compact('doctors'));
    }

    /**
     * Display the services page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('pages.services');
    }
    
    /**
     * Display the doctors page.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctors()
    {
        return view('pages.doctors');
    }

    /**
     * Display the doctors page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        return view('pages.contacts');
    }

    /**
     * Display the doctors page.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('pages.dashboard-overview-1');
    }


        // public function index()
        // {
        //     $services = Service::getAvailableServices();
        //     return view('home', ['services' => $services]);
        // }
    
    
}