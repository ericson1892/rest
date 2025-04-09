<?php

namespace App\Http\Controllers;
use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    public function index($idCategoria) {
        $platillos = Platillo::where('id_categoria',$idCategoria)
                                    ->where('estado_auditoria','1')
                                    ->get();
        return view('platillos', compact('platillos'));
    }
}
