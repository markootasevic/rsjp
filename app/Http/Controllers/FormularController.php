<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formular;
use App\Propisi;
use App\FinansijskiIzdaci;
use App\PotrebnaDokumentacija;


class FormularController extends Controller
{

    public function postFormular(Request $request)
    {
        $formular = Formular::create($request->all());
  		
        self::dodajPropise($request, $formular);
        self::dodajFinansijskeIzdatke($request, $formular);
        self::dodajPotrebnaDokumenta($request, $formular);
		
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

    public static function dodajPotrebnaDokumenta(Request $request, Formular $formular) {
      
            for ($i=0; $i <= 30; $i++) { 
                 $a = $i;
    
                if($i == 0) {
                    $a = "";
                }
                if($i == 1) {
                    continue;
                }
                if($request->input('nazivDokument'.$a) == null || $request->input('nazivDokument'.$a) == '') {
                    break;
                }

                $formaDokumentCBox = $request->input('formaDokument'.$a);
                $formaDokZaIspis1 = "";
                    if (is_array($formaDokumentCBox) || is_object($formaDokumentCBox)) {
                        foreach ($formaDokumentCBox as $formaDok) {
                            $formaDokZaIspis1 .= $formaDok.',';
                        }
                    
                        $formaDokZaIspis = substr($formaDokZaIspis1,0,strlen($formaDokZaIspis1)-1);
                    }else {
                        $formaDokZaIspis = $formaDokumentCBox;
                    }
                $pribavljanje = $request->input('pribavljanjeDokumentacije'.$a);
                $pribavljanjeZaIspis = "";
                if (is_array($pribavljanje) || is_object($pribavljanje)) {
                    foreach ($pribavljanje as $prib) {
                        $pribavljanjeZaIspis .= $prib.',';
                    }

                    $pribavljanjeZaIspis = substr($pribavljanjeZaIspis,0,strlen($pribavljanjeZaIspis)-1);
                } else {
                    $pribavljanjeZaIspis = $pribavljanje;
                }
                $sluzbenaZaIspis = '';
                $b = $a;
                if (strpos($pribavljanjeZaIspis, 'Орган по службеној дужности') !== false) {
                    $index = 'pribavljanjePoSlDuz'.$b;
                    $sluzbena = $request->input($index);
                    
                    if (is_array($sluzbena) || is_object($sluzbena)) {
                        foreach ($sluzbena as $sluzb) {
                        $sluzbenaZaIspis .= $sluzb.',';
                        } 
                        $sluzbenaZaIspis = substr($sluzbenaZaIspis,0,strlen($sluzbenaZaIspis)-1);     
                        
                    } else {
                        $sluzbenaZaIspis = $sluzbena;
                    }
                }

                $formular->potrebneDokumentacije()->create([
                    'nazivDokument' =>  $request->input('nazivDokument'.$a),
                    'usloviDokument' => $request->input('usloviDokument'.$a),
                    'izdavalacDokument' => $request->input('izdavalacDokument'.$a),
                    'podaciDokument' => $request->input('podaciDokument'.$a),
                    'formaDokument' => $formaDokZaIspis,
                    'pribavljanjeDokumentacije' => $pribavljanjeZaIspis,
                    'pribavljanjePoslDuz' => $sluzbenaZaIspis,
                ]);
                // } else {

                // }
        }

    }

}
