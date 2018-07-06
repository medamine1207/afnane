<?php

namespace App\Http\Controllers;

use App\models\In;
use App\models\Out;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function home()
    {
    	//création de la variable today qui contient la date d'aurd'hui
        $today = Carbon::now()->format('Y-m-d');
        

        //effectuer la requete sur la table tbl_ins pour avoir tous les enregistrements qui concorde avec la date $today
        $ins = DB::table('tbl_ins')
        			->whereDate('created_at','=',$today)
        			->get();


 		//effectuer la requete sur la table tbl_outs pour avoir tous les enregistrements qui concorde avec la date $today
 		$outs = DB::table('tbl_outs')
        			->whereDate('created_at','=',$today)
        			->get();

    	//retourner la vue en question et y passer les données collecté 
    	return view('home',compact('ins','outs'));
    }
}
