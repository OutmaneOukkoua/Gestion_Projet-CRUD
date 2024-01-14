@extends('Layout.master')
@section('title','Add Projet')
@section('body')  

    <form action='/SaveProjet' method="post">   
        @csrf    
        <div class="container">
            <table class="table table-striped">
                    <p>
                        <label> Numero projet </label><br>
                        <input type="text" name="tNumProjet"/><br>
                        @error('tNumProjet')
                            <span class="text-danger">{{ $message}}</span>         
                        @enderror
                    </p>
                    <p>
                        <label> Designation </label><br>
                        <input type="text" name="tDesignation"/><br>
                        @error('tDesignation')
                            <span class="text-danger">{{ $message}}</span>         
                        @enderror
                    </p>
                    <p>
                        <label> Code Categorie </label><br>
                        <input type="text" name="tCodeCategorie"/><br>
                        @error('tCodeCategorie')
                            <span class="text-danger">{{ $message}}</span>         
                        @enderror
                    </p>
                    <p>
                        <label> Date Debut </label><br>
                        <input type="text" name="tDateDebut"/><br>
                        @error('tDateDebut')
                            <span class="text-danger">{{ $message}}</span>         
                        @enderror
                    </p>
                    <p>
                        <label> Date Fin </label><br>
                        <input type="text" name="tDateFin"/><br>
                        @error('tDateFin')
                            <span class="text-danger">{{ $message}}</span>         
                        @enderror
                    </p>    

                    <p>
                        <input type="submit" name="btnSaveAdd" value="Save"/>
                    </p>   
            </table>
            

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h1>Liste des Erreurs</h1>
                    <ul>
                        @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </form>
@endsection    

