<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $usuario = Auth::user(); // Obtiene el usuario autenticado
    return view('informacion', compact('usuario'));
    }
}
