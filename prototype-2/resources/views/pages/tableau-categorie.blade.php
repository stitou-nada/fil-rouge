@extends('pages.principal')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des categorie</h1>
    <ol class="breadcrumb mb-4">
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
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection