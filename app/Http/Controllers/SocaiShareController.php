<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocaiShareController extends Controller
{
    public function ShareWidget()
    {
    $shareComponent = \Share::page(
    'https://www.pobitrodeb.com',
    'Share This ',
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()
    ->reddit();

    return view('welcome', compact('shareComponent'));
    }
}
