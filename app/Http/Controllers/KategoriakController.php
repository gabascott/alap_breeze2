<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriakController extends Controller
{
    public function osszesKategoria(){
        $kategoria =  Kategoriak::all();
        return $kategoria;
    }

    public function keresKategoria($id){
        $kategoria = Kategoriak::find($id);
        return $kategoria;
    }

    public function torolKategoria($id){
        Kategoriak::find($id)->delete();
    }
}
