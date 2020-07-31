<?php

namespace App\Http\Controllers;

use App\Aarticle;

class AarticlesController extends Controller
{
    public function index()
    {
        $aarticles = Aarticle::lastest()->get();

        return view('aarticles.index', ['aarticle' => $aarticles]);
    }


    public function show($id)
    {

        $aarticle = Aarticle::find($id);

        return view('aarticles.show', ['aarticle' => $aarticle]);

    }


    public function create()
    {
        return view('Aarticles..envcreate');
    }
}
