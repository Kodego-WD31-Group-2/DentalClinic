<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
        /**
     * Display the appointment page.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointments()
    {
        return view('appointment.appointment');
    }
}
