<?php

namespace App\Http\Controllers;

use App\Models\Padron;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PadronController extends Controller
{
    public function index()
    {

        return view('padrons.index');

    }

 }
