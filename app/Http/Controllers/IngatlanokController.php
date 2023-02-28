<?php

namespace App\Http\Controllers;

use App\Models\Ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    public function osszesIngatlan(){
        $ingatlan =  Ingatlanok::all();
        return $ingatlan;
    }

    public function ingatlanKategoriaval(){
        $ingatlan = DB::table('ingatlanoks as i')
        ->join('kategoriaks as k', 'i.kategoria', '=', 'k.id')
        ->select('k.nev', 'leiras', 'hirdetesDatuma', 'tehermentes', 'ar', 'kepUrl')
        ->get();
        return $ingatlan;
    }

    public function keresIngatlan($id){
        $ingatlan = Ingatlanok::find($id);
        return $ingatlan;
    }

    public function torolIngatlan($id){
        Ingatlanok::find($id)->delete();
    }

    public function ujIngatlan(Request $request){
        $ingatlan  = new Ingatlanok();
        $ingatlan ->kategoria = $request->kategoria;
        $ingatlan ->leiras = $request->leiras;
        $ingatlan ->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan ->tehermentes = $request->tehermentes;
        $ingatlan ->ar = $request->ar;
        $ingatlan ->kepUrl = $request->kepUrl;
        $ingatlan ->save();
    }


}
