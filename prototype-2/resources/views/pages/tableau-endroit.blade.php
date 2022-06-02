@extends('pages.principal')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des endroit</h1>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="pages.inserte-endroit">Ajouter endroit</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>PHOTO</th>
                        <th>NAME</th>
                        <th>TEMPERATURE</th>
                        <th>CATEGORIE</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($place as $value)
                        
                  
                    <tr>
                        <td style="width: 20%"><div class="uImg"><img src="img/{{$value ->photo_place}}" alt="" style="width: 100px"></div></td>
                        <td>{{$value->nom_place}}</td>
                        <td>{{$value->tumperature_place}}</td>
                        <td>{{$value->name_categorie}}</td>
                        <td>{{$value->description_place}}</td>
                        <td>                        
                            <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            <a href=""><i class="item-action fa fa-edit" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            <a href=""> <i class="item-action fa fa-trash" data-toggle="modal"
                                    data-target="#deleteItemModal"></i></a>
                    </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection