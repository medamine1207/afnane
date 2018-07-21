<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;

class archivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $today = Carbon::now()->format('Y-m-d');
        $collection_ins =  DB::table('tbl_ins')
                        ->whereDate('created_at','=',$today)
                        ->get(); 

        $collection_outs =  DB::table('tbl_outs')
                        ->whereDate('created_at','=',$today)
                        ->get();

        $last_archive = DB::table('tbl_archives')
                        ->orderBy('created_at','desc')
                        ->first();
        

        $total_out = collect($collection_outs)->sum('montant_out');

        $total_in = collect($collection_ins)->sum('montant_in');

        $solde_depart = collect($last_archive)->get('solde_actuel_archive') ;

        return view('archives.create',compact('total_out','total_in','solde_depart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('bonjour vous ete dans la fonction store');
        $this->validate($request,
            [
            'fh_solde_actuel_archive'=>'bail|required|numeric',
            'fh_total_in_archive'=>'bail|required|numeric',
            'fh_total_out_archive'=>'bail|required|numeric',
            'fh_solde_depart_archive'=>'bail|required|numeric',
            'fh_diff_archive'=>'bail|required|numeric'

        ]);

       Archive::create([

        'total_in_archive'=>floatval($request->fh_total_in_archive), 
        'total_out_archive'=>floatval($request->fh_total_out_archive), 
        'solde_depart_archive'=>floatval($request->fh_solde_depart_archive), 
        'solde_actuel_archive'=>floatval($request->fh_solde_actuel_archive), 
        'diff_archive'=>floatval($request->fh_diff_archive)

        ]);

        Flashy::success('Archive ajouté avec succès');
       return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
