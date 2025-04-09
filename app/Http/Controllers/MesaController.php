<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index() {
        $mesas = Mesa::where('estado_auditoria','1')->get();
        return view('mesas', compact('mesas'));
    }
}
