@extends('Layout.master')
@section('title','Get All Projets')
@section('body')

@if (session('insert'))
    <div class="alert alert-success">
        {{ session('insert') }}
    </div>
@endif

@if (session('UPG'))
    <div class="alert alert-success">
        {{ session('UPG') }}
    </div>
@endif


@if (session('delete'))
    <div class="alert alert-success">
        {{ session('delete') }}
    </div>
@endif


    <form action='' method="post">   
        @csrf
        
        <div class="container">
            <a href="/AddProjet">Add Projet</a>
            <table class="table table-striped">
                <thead class="table table-black">
                    <th>Numero Projet</th>
                    <th>Designation</th>
                    <th>Code Categorie</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>Actions</th>
                </thead>
                 @foreach ($projets as $pro )
                <tr>
                    <td>{{ $pro->NumProjet }}</td>
                    <td>{{ $pro->Designation }}</td>
                    <td>{{ $pro->CodeCategorie }}</td>
                    <td>{{ $pro->DateDebut }}</td>
                    <td>{{ $pro->DateFin }}</td>
                    <td><a href="/ModifierProjet/{{$pro->NumProjet}}">Modifier</a> 
                    <a href="/SupprimerProjet/{{$pro->NumProjet}}">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </table>
           {{ $projets->links() }}
        </div>
    </form>
@endsection