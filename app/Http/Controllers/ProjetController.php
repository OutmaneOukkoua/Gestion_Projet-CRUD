<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Query\Builder;

class ProjetController extends Controller
{
    // 
    public function AllProjets()
    {
        //$projets=Projet::simplePaginate(4);
        // ou
        //$projets=DB::table('Projet')->simplePaginate(4);
        $projets=DB::table('Projet')->paginate(3);
        //dd($projets);
        return view('AllProjets',['projets'=>$projets]);

    }
    public function SaveSupprimerProjet($numpro)
    {

        try
        {
            $n=DB::table('Projet')->where('NumProjet','=',$numpro)
                                  ->delete();
            if($n==1)
                return redirect(Route('AllProjets'))->with('delete','Projet Deleted');
        }
        catch (Exception $ex) 
        {
            return redirect(Route('AllProjets'))->with('delete','Not Deleted');
        }

    }
    public function SaveProjet(Request $req)
    {  // validation
        $validation=$req->validate([
            'tNumProjet'=>'required|integer',
            'tDesignation'=>'required',
            'tCodeCategorie'=>'required',
            'tDateDebut'=>'required|date',
            'tDateFin'=>'required|date'
        ]);
        // dd($req);    // insertion
        try
        {
            $n=DB::table('Projet')->insert(
                    [
                        'NumProjet'=>$req->tNumProjet,
                        'Designation'=>$req->tDesignation,
                        'CodeCategorie'=>$req->tCodeCategorie,
                        'DateDebut'=>$req->tDateDebut,
                        'DateFin'=>$req->tDateFin
                    ]);
            if($n==1)
                return redirect(Route('AllProjets'))->with('insert','Projet Inserted');            
        }
        catch (Exception $ex) 
        {
            return redirect(Route('AllProjets'))->with('insert','Not Added');
        } 
    }

    public function ModifierProjet($np)
    {

        $pro=DB::table('Projet')->where('NumProjet','=',$np)->first();
                            
        //dd($pro);
        return view('ModifierProjet',['pro'=>$pro]);

    }

    public function SaveModifierProjet(Request $req)
    {
        try
        {
            $n=DB::table('Projet')->where('NumProjet','=',$req->tNumProjet)
                           ->update([
                                        'Designation'=>$req->tDesignation,
                                        'CodeCategorie'=>$req->tCodeCategorie,
                                        'DateDebut'=>$req->tDateDebut,
                                        'DateFin'=>$req->tDateFin
                                    ]);
            if($n==1)
            return redirect(Route('AllProjets'))->with('UPG','Projet Updated');
        }
        catch(Exception $ex)
        {
            return redirect(Route('AllProjets'))->with('UPG','Not Updated');
        }

    }
}
