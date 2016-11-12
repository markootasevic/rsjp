<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formular;
use App\Propisi;

class FormularController extends Controller
{

    public function postFormular(Request $request)
    {
        $formular = Formular::create($request->all());
  		
        self::dodajPropise($request, $formular);
		
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
    		// } else {

    		// }
    	}
        
        
    }

}
