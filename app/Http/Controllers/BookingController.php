<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //esto hace que todos los metodos o acciones de este controller necesites estar autenticado para verlos.
        $this->middleware('auth');
    }
}
