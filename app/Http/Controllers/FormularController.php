<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formular;
use App\Propisi;
use App\FinansijskiIzdaci;

class FormularController extends Controller
{

    public function postFormular(Request $request)
    {
        $formular = Formular::create($request->all());
  		
        self::dodajPropise($request, $formular);
        self::dodajFinansijskeIzdatke($request, $formular);
		
        return redirect()->back();

    }

    public static function dodajPropise(Request $request, Formular $formular) {
    	
    	for ($i=0; $i <= 9; $i++) { 
    		$a = $i;
    		$b = $i + 1;
    		if($i == 0) {
    			$a = "";
    		}
    		if($request->input('clanoviPropisa'.$a) == null || $request->input('clanoviPropisa'.$a) == '') {
    			break;
    		}
    		$formular->propisi()->create([
				'vrstaPropisa' =>  $request->input('vrstaPropisa'.$a),
				'nazivPropisa' => $request->input('nazivPropisa'.$b),
				'nazivPropisaOpt' => $request->input('nazivPropisaOpt'.$b),
				'clanoviPropisa' => $request->input('clanoviPropisa'.$a),
			]);
    	}     
    }

    public static function dodajFinansijskeIzdatke(Request $request, Formular $formular) {

    	for ($i=0; $i <= 10; $i++) { 
    		$a = $i+1;
    		if($request->input('pozivNaBroj'.$a) == null || $request->input('pozivNaBroj'.$a) == '') {
    			break;
    		}   
			$formular->finansijskiIzdaci()->create([
				'vrstaIzdatka' =>  $request->input('vrstaIzdatka'.$a),
				'punNazivIzdatka' => $request->input('punNazivIzdatka'.$a),
				'nazivPropisa' => $request->input('nazivPropisa'.$a),
				'propisNijeObjavljen' => $request->input('opisPropisIzdatak'.$a),
				'clanPropisIzdatak' =>  $request->input('clanPropisIzdatak'.$a),
				'tarifniBroj' => $request->input('tarifniBroj'.$a),
				'iznos' => $request->input('iznos'.$a),
				'svrhaPlacanja' => $request->input('svrhaPlacanja'.$a),
				'primalac' =>  $request->input('primalac'.$a),
				'brojRacuna' => $request->input('brojRacuna'.$a),
				'pozivNaBroj' => $request->input('pozivNaBroj'.$a),
				'komentarIzdatak' => $request->input('komentarIzdatak'.$a),
			]);

		}
    }

}
