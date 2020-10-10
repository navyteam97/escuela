<?php

namespace App\Http\Controllers;

use App\Administracion;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    public function index()
    {
        return view('layouts/administracion');
    }
}
