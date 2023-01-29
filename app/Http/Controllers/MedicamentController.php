<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
    $medicaments = medicament::where('nom_comercial', 'LIKE',$request->nom.'%')->orWhere('nom_molecule', 'LIKE',$request->nom.'%')
    ->get();
    return response(["medicaments" => $medicaments]);
    }
    public function check_interactions(Request $request)
    {
        $interactions=Collection::make();
        for($i=1;$i<=count($request->all());$i++){
            for($j=$i;$j<=count($request->all());$j++){
                if($i <> $j){
                    $var1 = $request->{"med" . $i};
                    $var2 = $request->{"med" . $j};
                    $interaction1 = DB::table('interactions')->where('medicament1','=',$var1)->where('medicament2','=',$var2)->get();
                    $interaction2 = DB::table('interactions')->where('medicament1','=',$var2)->where('medicament2','=',$var1)->get();
                    if($interaction1 && $interaction1->isNotEmpty()) $interactions->push($interaction1);
                    if($interaction2 && $interaction2->isNotEmpty()) $interactions->push($interaction2);
                    $interaction1 = null;
                    $interaction2 = null;
                }
            }
        }
        return response(["interactions" => $interactions]);
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function show(Medicament $medicament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicament $medicament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicament $medicament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicament  $medicament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicament $medicament)
    {
        //
    }
}
