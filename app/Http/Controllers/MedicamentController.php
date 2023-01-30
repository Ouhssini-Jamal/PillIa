<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use LengthException;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search($nom)
    {
    $medicaments1 = medicament::where('nom_comercial', 'LIKE',$nom.'%')->orWhere('nom_molecule', 'LIKE',$nom.'%')
    ->get();
    $medicaments2 = medicament::Where('nom_molecule', 'LIKE','%'.'/ '.$nom.'%')
    ->get();
    $medicaments =  $medicaments1->merge($medicaments2);
    return response(["medicaments" => $medicaments]);
    }

    public function check_Minteractions(Request $request)
    {
        $Minteractions=Collection::make();
        if($request->Diabete){
            foreach($request->meds as $med){
                $interaction = DB::table('interactions_maladies')->where('medicament','=',$med)->where('maladie','=','diabete')->get();
                if($interaction && $interaction->isNotEmpty()) $Minteractions->push($interaction);
            }
        }
        if($request->InsufisanceRenale){
            foreach($request->meds as $med){
                $interaction = DB::table('interactions_maladies')->where('medicament','=',$med)->where('maladie','=','InsufisanceRenale')->get();
                if($interaction && $interaction->isNotEmpty()) $Minteractions->push($interaction);
            }
        }
        if($request->Grossesse){
            foreach($request->meds as $med){
                $interaction = DB::table('interactions_maladies')->where('medicament','=',$med)->where('maladie','=','Grossesse')->get();
                if($interaction && $interaction->isNotEmpty()) $Minteractions->push($interaction);
            }
        }
        return $Minteractions;
    }

    public function check_interactions(Request $request)
    {
        $interactions=Collection::make();
        for($i=0;$i<count($request->meds);$i++){
            for($j=$i;$j<count($request->meds);$j++){
                if($i <> $j){
                    $var1 = $request->meds[$i];
                    $var2 = $request->meds[$j];
                    $interaction1 = DB::table('interactions')->where('medicament1','=',$var1)->where('medicament2','=',$var2)->get();
                    $interaction2 = DB::table('interactions')->where('medicament1','=',$var2)->where('medicament2','=',$var1)->get();
                    if($interaction1 && $interaction1->isNotEmpty()) $interactions->push($interaction1);
                    if($interaction2 && $interaction2->isNotEmpty()) $interactions->push($interaction2);
                    $interaction1 = null;
                    $interaction2 = null;
                }
            }
        }

        $Minteractions = $this->check_Minteractions($request);
        return response([
            "interactions" => $interactions,
            "Minteractions" => $Minteractions
    ]);
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
