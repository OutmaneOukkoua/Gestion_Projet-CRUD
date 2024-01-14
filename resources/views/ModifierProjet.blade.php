@extends('Layout.master')
@section('title','Modifier Projet')
@section('body')
    <form action='/SaveModifierProjet' method="post">   
        @csrf
        
        <div class="container">
            <table class="table table-striped">
                    <p>
                        <label> Numero projet </label><br>
                        <input type="text" name="tNumProjet" value="{{$pro->NumProjet}}"/>
                    </p>
                    <p>
                        <label> Designation </label><br>
                        <input type="text" name="tDesignation" value="{{$pro->Designation}}"/>
                    </p>
                    <p>
                        <label> Code Categorie </label><br>
                        <input type="text" name="tCodeCategorie" value="{{$pro->CodeCategorie}}"/>
                    </p>
                    <p>
                        <label> Date Debut </label><br>
                        <input type="text" name="tDateDebut" value="{{$pro->DateDebut}}"/>
                    </p>
                    <p>
                        <label> Date Fin </label><br>
                        <input type="text" name="tDateFin" value="{{$pro->DateFin}}"/>
                    </p>    

                    <p>
                        <input type="submit" name="btnModifier" value="Modifier"/>
                    </p>   
            </table>

        </div>
    </form>
@endsection