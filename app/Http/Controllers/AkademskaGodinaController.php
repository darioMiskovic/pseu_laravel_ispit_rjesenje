<?php


namespace App\Http\Controllers;


use App\Models\AkademskaGodina;

class AkademskaGodinaController extends Controller
{

    public function  akademskeGodine(){
        return AkademskaGodina::with('nastavni_plan')->get();
    }

    public function dodajAkademskuGodinu($oznaka, $prva_god, $druga_god){
        $ak_god = new AkademskaGodina();
        $ak_god->oznaka = $oznaka;
        $ak_god->godina_1 = $prva_god;
        $ak_god->godina_2 = $druga_god;
        $ak_god->save();

        return "Uspješno dodana godina";
    }

    public function izbrisiGodinu($god_1, $god_2){

        $ak_god = AkademskaGodina::where('godina_1' ,'=', $god_1,'AND','godina_2', '=', $god_2);

        $ak_god->delete();

        return "Uspješno obrisana akademska godina";

    }
}
