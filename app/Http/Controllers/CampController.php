<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;

class CampController extends Controller
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
    public function index(){
        $camps = Camp::all();
        return view('camps.index',compact('camps'));
    }

    public function show(Camp $camp){
        return view('camps.show',compact('camp'));
    }
}
