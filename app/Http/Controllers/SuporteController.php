<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index()
    {
        return 'Home Page do Site';
    }

    public function contato()
    {
        return 'Page Contato';
    }
}
