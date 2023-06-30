<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $encabezado = view('shared.header');
        $contenido = view('index');
        $pie = view('shared.footer');

        return view('layouts.app', compact('encabezado', 'contenido', 'pie'));
    }

    public function contact()
    {
        $encabezado = view('shared.header');
        $contenido = view('contact');
        $pie = view('shared.footer');

        return view('layouts.app', compact('encabezado', 'contenido', 'pie'));
    }

    public function about()
    {
        $encabezado = view('shared.header');
        $contenido = view('about');
        $pie = view('shared.footer');

        return view('layouts.app', compact('encabezado', 'contenido', 'pie'));
    }

    public function news()
    {
        $encabezado = view('shared.header');
        $contenido = view('news');
        $pie = view('shared.footer');

        return view('layouts.app', compact('encabezado', 'contenido', 'pie'));
    }

    public function services()
    {
        $encabezado = view('shared.header');
        $contenido = view('services');
        $pie = view('shared.footer');

        return view('layouts.app', compact('encabezado', 'contenido', 'pie'));
    }
}
