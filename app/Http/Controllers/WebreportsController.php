<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebreportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    public function plntoken()
    {
        return view('potrait.plntoken');
    }

    public function pln()
    {
        return view('potrait.pln');
    }

    public function bpjs()
    {
        return view('potrait.bpjs');
    }

    public function tagihan()
    {
        return view('potrait.tagihan');
    }

    public function LandscapePln()
    {
        return view('landscape.pln');
    }

    public function LandscapePlntoken()
    {
        return view('landscape.plntoken');
    }

    public function LandscapeBpjs()
    {
        return view('landscape.bpjs');
    }

    public function LandscapeTagihan()
    {
        return view('landscape.tagihan');
    }



}
