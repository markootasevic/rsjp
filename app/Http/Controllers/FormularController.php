<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formular;
use App\Propisi;
use App\FinansijskiIzdaci;
use App\PotrebnaDokumentacija;
use App\ZalbeniPostupak;
use App\TroskoviZalbenogPostupka;
use App\OpstiPodaci;
use App\UkupanBrojZahteva;
use App\LiceKojePopunjavaFormular;
use App\SvrhaPostupka;
use App\SvrhaPostupkaStavke;
use App\PojednostavljenjePostupka;
use App\PredlogIzmenePostupka;
use App\Delatnost;
use App\Poddelatnost;
use App\OstaliElementiPostupka;
use App\ObrazacZaPodnosenjeZahteva;
use App\IzdataAkta;

class FormularController extends Controller
{

    public function postFormular(Request $request)
    {
        $formular = Formular::create($request->all());
  		
        self::dodajPropise($request, $formular);
        self::dodajFinansijskeIzdatke($request, $formular);
        self::dodajPotrebnaDokumenta($request, $formular);

        $zalbeniPostupak = self::dodajZalbeniPostupak($request, $formular);
		self::dodajTroskoveZalbenogPostupka($request, $zalbeniPostupak);
        
        $ukupanBrZahteva = UkupanBrojZahteva::create($request->all());
        $liceKojePopunjavaFormular = LiceKojePopunjavaFormular::create($request->all());
        $opstiPodaci = self::dodajOpstePodatke($formular, $ukupanBrZahteva, $liceKojePopunjavaFormular, $request);
        
		self::dodajSvrhuPostupkaSaStavkama($request, $formular);
        self::dodajPojednostavljenjeSaPredlogomIzmenePostupka($request, $formular);
        self::dodajDelatnostiIPoddelatnosti($request, $opstiPodaci);
        $ostaliElementiPostupka = self::dodajOstaleElementePostupka($request, $formular);
        $obrazacZaPodnosenjeZahteva = self::dodajObrazacZaPodnosenjeZahteva($request, $ostaliElementiPostupka);
        self::dodajIzdataAkta($request, $obrazacZaPodnosenjeZahteva);
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
                'b_fajl' => $request->input('b_fajl'.$b),
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

    public static function dodajZalbeniPostupak(Request $request, Formular $formular) {

            $nacin = $request->input('zalbaPodnosenje');
            $nacinIspis = "";
            if (is_array($nacin) || is_object($nacin)) {
                        foreach ($nacin as $nac) {
                            $nacinIspis .= $nac.',';
                        }
                    
                        $nacinIspis = substr($nacinIspis,0,strlen($nacinIspis)-1);
                    }else {
                        $nacinIspis = $nacin;
                    }

            $zalbeniPostupak = $formular->zalbeniPostupci()->create([
                    'protivAkt' => $request->input('protivAkt'),
                    'nazivPropisa'=> $request->input('nazivPropisa'),
                    'zalbaPropisOpis'=> $request->input('zalbaPropisOpis'),
                    'e_fajl'=> $request->input('e_fajl'),
                    'zalbaPropisClan'=> $request->input('zalbaPropisClan'),
                    'zalbaOrganDostava'=> $request->input('zalbaOrganDostava'),
                    'zalbaRok'=> $request->input('zalbaRok'),
                    'zalbaPodnosenje'=> $nacinIspis,
                    'zalbaOrganOdluka'=> $request->input('zalbaOrganOdluka'),
                    'rokZaOdlucivanjeZalbe'=> $request->input('rokZaOdlucivanjeZalbe'),
                ]);

            return $zalbeniPostupak;
    }

    public static function dodajTroskoveZalbenogPostupka(Request $request, ZalbeniPostupak $zalbeniPostupak) {

        $zalbeniPostupak->troskoviZalbenogPostupka()->create([
                'zalbaNazivTrosak' => $request->input('zalbaNazivTrosak'),
                'nazivPropisa' => $request->input('nazivPropisa'),
                'zalbaTrosakPropisOpis' => $request->input('zalbaTrosakPropisOpis'),
                'e_fajl2' => $request->input('e_fajl2'),
                'zalbaTrosakPropisClan' => $request->input('zalbaTrosakPropisClan'),
                'zalbaTarifniBroj' => $request->input('zalbaTarifniBroj'),
                'zalbaIznos' => $request->input('zalbaIznos'),
                'zalbaSvrhaPlacanja' => $request->input('zalbaSvrhaPlacanja'),
                'zalbaPrimalac' => $request->input('zalbaPrimalac'),
                'zalbaBrojRacuna' => $request->input('zalbaBrojRacuna'),
                'zalbaPozivNaBroj' => $request->input('zalbaPozivNaBroj'),
            ]);
      
    }

    public function dodajOpstePodatke(Formular $formular,UkupanBrojZahteva $ukupanBrZahteva, LiceKojePopunjavaFormular $liceKojePopunjavaFormular, Request $request){
      
        $opstiPodaci =new OpstiPodaci();
        $opstiPodaci->formular()->associate($formular);
        $opstiPodaci->liceKojePopunjavaFormular()->associate($liceKojePopunjavaFormular);
        $opstiPodaci->ukupanBrojZahteva()->associate($ukupanBrZahteva);

        $opstiPodaci->nadlezniOrgan = $request->input('nadlezniOrgan');
        $opstiPodaci->nadlezniOrgan2 = $request->input('nadlezniOrgan2');
        $opstiPodaci->organizacionaJedinica = $request->input('organizacionaJedinica');

        $subjekti = $request->input('subjekti');
        $subjektiIspis = "";
            if (is_array($subjekti) || is_object($subjekti)) {
                        foreach ($subjekti as $nac) {
                            $subjektiIspis .= $nac.',';
                        }
                    
                        $subjektiIspis = substr($subjektiIspis,0,strlen($subjektiIspis)-1);
                    }else {
                        $subjektiIspis = $subjekti;
                    }


        $opstiPodaci->subjekti = $subjektiIspis;
        $opstiPodaci->vrstaOvlascenja = $request->input('vrstaOvlascenja');

        $nivoVlasti = $request->input('nivoVlasti');
        $nivoVlastiIspis = "";
            if (is_array($nivoVlasti) || is_object($nivoVlasti)) {
                        foreach ($nivoVlasti as $nac) {
                            $nivoVlastiIspis .= $nac.',';
                        }
                    
                        $nivoVlastiIspis = substr($nivoVlastiIspis,0,strlen($nivoVlastiIspis)-1);
                    }else {
                        $nivoVlastiIspis = $nivoVlasti;
                    }

        $opstiPodaci->nivoVlasti = $nivoVlastiIspis;
        $opstiPodaci->viseNivoa = $request->input('viseNivoa');

        $sprovodjenjePostupka = $request->input('sprovodjenjePostupka');
        $sprovodjenjePostupkaIspis = "";
            if (is_array($sprovodjenjePostupka) || is_object($sprovodjenjePostupka)) {
                        foreach ($sprovodjenjePostupka as $nac) {
                            $sprovodjenjePostupkaIspis .= $nac.',';
                        }
                    
                        $sprovodjenjePostupkaIspis = substr($sprovodjenjePostupkaIspis,0,strlen($sprovodjenjePostupkaIspis)-1);
                    }else {
                        $sprovodjenjePostupkaIspis = $sprovodjenjePostupka;
                    }

        $opstiPodaci->sprovodjenjePostupka = $sprovodjenjePostupkaIspis;
        $opstiPodaci->vrstaPostupka = $request->input('vrstaPostupka');
        $opstiPodaci->ucestalostPostupka = $request->input('ucestalostPostupka');
        $opstiPodaci->intenzitetPodnosenja = $request->input('intenzitetPodnosenja');
        $opstiPodaci->nazivIzdatogAkta = $request->input('nazivIzdatogAkta');

        $opstiPodaci->save();
        return $opstiPodaci;
    }

    public static function dodajSvrhuPostupka(Request $request, Formular $formular) {
        
        $svrhaPostupka = $formular->svrhePostupka()->create([
            'svrhaIOpis' => $request->input('svrhaIOpis'),
            'organKomunikacija' => $request->input('organKomunikacija'),
        ]);

        return $svrhaPostupka;

    }

    public static function dodajSvrhuPostupkaStavke(Request $request, SvrhaPostupka $svrhaPostupka) {

        for ($i=1; $i <= 10; $i++) { 

            if ($request->input('organizacijaPreklapanje'.$i) != null || $request->input('organizacijaPreklapanje'.$i) != "") {

                $svrhaPostupka->svrhaPostupkaStavke()->create([
                    'organizacijaPreklapanje' => $request->input('organizacijaPreklapanje'.$i),
                    'aktivnostPreklapanje' => $request->input('aktivnostPreklapanje'.$i),
                ]);
                
            } else {
                break;
            }
        }
    }

    public static function dodajSvrhuPostupkaSaStavkama(Request $request, Formular $formular) {

        $svrhaPostupka = self::dodajSvrhuPostupka($request, $formular);
        self::dodajSvrhuPostupkaStavke($request, $svrhaPostupka);
    }


    public static function dodajPojednostavljenjePostupka(Request $request, Formular $formular) {

        $pojednostavljenjePostupka = $formular->pojednostavljenjePostupaka()->create([
            'rokPredmeta' => $request->input('rokPredmeta'),
            'zastarelostObrazlozenje' => $request->input('zastarelostObrazlozenje'),
            'izmenaPostupak' => $request->input('izmenaPostupak'),
            'potrebaUkidanje' => $request->input('potrebaUkidanje'),
            'clanoviIzmena' => $request->input('clanoviIzmena'),
            'preklapanjeNadleznosti' => $request->input('preklapanjeNadleznosti'),
            'organiPreklapanje' => $request->input('organiPreklapanje'),
            'digitalizacijaPostupka' => $request->input('digitalizacijaPostupka'),
            'preduslovE-Postupak' => $request->input('preduslovE-Postupak'),
        ]);
        
        return $pojednostavljenjePostupka;
    }

    public static function dodajPredlogIzmenePostupka(Request $request, PojednostavljenjePostupka $pojednostavljenjePostupka) {

        $pojednostavljenjePostupka->predloziIzmenePostupaka()->create([
            'izmenaPostupak' => $request->input('pojednostavljenje'),
            'smanjenjeBroja' => $request->input('smanjenjeBroja'),
            'smanjenjeUcestalosti' => $request->input('smanjenjeUcestalosti'),
            'eliminacijaDok' => $request->input('eliminacijaDok'),
            'eliminacijaInfo' => $request->input('eliminacijaInfo'),
            'skracenjeRoka' => $request->input('skracenjeRoka'),
            'smanjenjeTroskova' => $request->input('smanjenjeTroskova'),
            'eliminacijaDupli' => $request->input('eliminacijaDupli'),
            'pojednostavljenjeObrasca' => $request->input('pojednostavljenjeObrasca'),
            'uvodjenjeOnline' => $request->input('uvodjenjeOnline'),
            'propisivanjeObrasca' => $request->input('propisivanjeObrasca'),
            'produzenjePodnosiocu' => $request->input('produzenjePodnosiocu'),
            'pripremaUputstva' => $request->input('pripremaUputstva'),
            'drugo' => $request->input('drugo'), 
        ]);
    }

    public static function dodajPojednostavljenjeSaPredlogomIzmenePostupka(Request $request, Formular $formular) {
        $pojednostavljenjePostupka = self::dodajPojednostavljenjePostupka($request, $formular);
        self::dodajPredlogIzmenePostupka($request, $pojednostavljenjePostupka);
    }

    public static function dodajDelatnostiIPoddelatnosti(Request $request, OpstiPodaci $opstiPodaci) {

        $delatnosti = $request->input('delatnost');
        if (is_array($delatnosti) || is_object($delatnosti)) {

            foreach ($delatnosti as $delatnost) {
                $del = $opstiPodaci->delatnosti()->create([
                        'delatnost'=> $delatnost,
                    ]);
                $slovo = $delatnost[0];
                self::dodajPoddelatnostZaDelatnost($request, $opstiPodaci, $del, $slovo);
            }

        } else {
                $opstiPodaci->delatnosti()->create([
                        'delatnost'=> $delatnosti,
                    ]);
                $slovo = $delatnosti[0];
                self::dodajPoddelatnostZaDelatnost($request, $opstiPodaci, $delatnosti, $slovo);
        }

    }

    public static function dodajPoddelatnostZaDelatnost(Request $request, OpstiPodaci $opstiPodaci, Delatnost $delatnost, $index) {
        $poddelatnosti = $request->input($index);
        if($poddelatnosti == null || $poddelatnosti == '') {
            return;
        }
        if (is_array($poddelatnosti) || is_object($poddelatnosti)) {
            foreach ($poddelatnosti as $poddelatnost) {
                // $d = $delatnost->delatnostRbr;
                // $op = $delatnost->opstiPodaciID;
                // Poddelatnost::create([
                //         'delatnostRbr' => $d,
                //         'opstiPodaciID'=> $op,
                //         'poddelatnost' => $poddelatnost,
                //          ]);
                $podd = new Poddelatnost();
                $podd->delatnost()->associate($delatnost);
                $podd->opstiPodaci()->associate($opstiPodaci);
                $podd->poddelatnost = $poddelatnost;
                $podd->save();
            }
        } else {
                Poddelatnost::create([
                        'delatnostRbr' => $delatnost->delatnostRbr,
                        'opstiPodaciID' => $delatnost->opstiPodaciID,
                        'poddelatnost' => $poddelatnosti,
                ]);
        }
    }

    public static function dodajOstaleElementePostupka(Request $request, Formular $formular) {
       
        $ostaliElementiPostupka = $formular->ostaliElementiPostupka()->create([
            'rokPredmeta' => $request->input('rokPredmeta'),
            'rokPredmeta1' => $request->input('rokPredmeta1'),
            'rokZaResavanje' => $request->input('rokZaResavanje'),
            'nazivPropisaRok' => $request->input('nazivPropisaRok'),
            'rokPropisOpis' => $request->input('rokPropisOpis'),
            'dj_fajl1' => $request->input('dj_fajl1'),
            'propisRok' => $request->input('propisRok'),
            'rokNeuredni' => $request->input('rokNeuredni'),
            'rokUredni_Avg' => $request->input('rokUredni_Avg'),
            'vremeVazenja' => $request->input('vremeVazenja'),
            'nazivPropisaVremeVazenja' => $request->input('nazivPropisaVremeVazenja'),
            'nijeObjavljenVremeVazenja' => $request->input('vazenjePropisOpis'),
            'dj_fajl2' => $request->input('dj_fajl2'),
            'vremeVazenjaIzdatog' => $request->input('vremeVazenjaIzdatog'), 
        ]);

        return $ostaliElementiPostupka;
    }

    public static function dodajObrazacZaPodnosenjeZahteva(Request $request, OstaliElementiPostupka $ostaliElementiPostupka) {

        // $zahtevPodnosenje = $request->input('zahtevPodnosenje');
        // $zahtevPodnosenjeZaIspis = "";
        // if (is_array($zahtevPodnosenje) || is_object($zahtevPodnosenje)) {
        //     foreach ($zahtevPodnosenje as $zahtevPod) {
        //         $zahtevPodnosenjeZaIspis .= $zahtevPod.',';
        //     }
        
        //     $zahtevPodnosenjeZaIspis = substr($zahtevPodnosenjeZaIspis,0,strlen($zahtevPodnosenjeZaIspis)-1);
        // }else {
        //     $zahtevPodnosenjeZaIspis = $zahtevPodnosenje;
        // }
        $zahtevPodnosenje = self::uzmiPodatkeSaCheckbox($request, 'zahtevPodnosenje');
        $obrazacPreuzimanje = self::uzmiPodatkeSaCheckbox($request, 'obrazacPreuzimanje');
        $obrazacDostava = self::uzmiPodatkeSaCheckbox($request, 'obrazacDostava');

        $obrazacZaPodnosenjeZahteva = $ostaliElementiPostupka->obrasciZaPodnosenjeZahteva()->create([
            'zahtevPodnosenje' => $zahtevPodnosenje,
            'tipObrasca' => $request->input('tipObrasca'),
            'nazivPropisa' => $request->input('nazivPropisaObrazac'),
            'obrazacPropisOpis' => $request->input('obrazacPropisOpis'),
            'dj_fajl3' => $request->input('dj_fajl3'),
            'obrazacPropisClan' => $request->input('obrazacPropisClan'),
            'obrazacPreuzimanje' => $obrazacPreuzimanje,
            'linkObrazac' => $request->input('linkObrazac'),
            'dj_fajl4' => $request->input('rokUredni_Avg'),
            'obrazacDostava' => $obrazacDostava,
        ]);

        return $obrazacZaPodnosenjeZahteva;
    }

    public static function dodajIzdataAkta(Request $request, ObrazacZaPodnosenjeZahteva $obrazacZaPodnosenjeZahteva) {

        $nacinDostave = self::uzmiPodatkeSaCheckbox($request, 'nacinDostave');

        $obrazacZaPodnosenjeZahteva->izdatiAkti()->create([
            'nacinDostave' => $nacinDostave,
            'postojiRegistar' => $request->input('postojiRegistar'),
            'aktDostupan' => $request->input('aktDostupan'),
            'linkJavniRegistar' => $request->input('linkJavniRegistar'),
        ]);
    }

    private static function uzmiPodatkeSaCheckbox(Request $request, $name) {
        $checkBoxPodaci = $request->input($name);
        $podaciZaIspis = "";
        if (is_array($checkBoxPodaci) || is_object($checkBoxPodaci)) {
            foreach ($checkBoxPodaci as $podaci) {
                $podaciZaIspis .= $podaci.',';
            }
        
            $podaciZaIspis = substr($podaciZaIspis,0,strlen($podaciZaIspis)-1);
            return $podaciZaIspis;
        }else {
            return $checkBoxPodaci;
        }
    }
    

}
