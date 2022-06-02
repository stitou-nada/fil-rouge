@extends('pages.principal')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des endroit</h1>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                        <th>ID</th>
                        <th>NAME</th>
                        <th>TEMPERATURE</th>
                        <th>CATEGORIE</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>                        
                            <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            <a href=""><i class="item-action fa fa-edit" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            <a href=""> <i class="item-action fa fa-trash" data-toggle="modal"
                                    data-target="#deleteItemModal"></i></a>
                    </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>

@endsection