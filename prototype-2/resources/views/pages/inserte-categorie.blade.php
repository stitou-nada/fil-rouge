@extends('pages.principal')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <h1 class="titre text-center ">
        <strong>Ajouter Categories</strong>
    </h1>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <!-- form -->
                        <div class="card-header">Ajouter Categorie </div>
                        <div class="card-body">

                            <form action="" method="POST">
                                <form action="" method="POST" novalidate="novalidate">
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">Nom</label>
                                                <input id="cc-exp" name="nom_categorie" type="text"
                                                    class="form-control cc-exp" value="" data-val="true"
                                                    data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">Photo</label>
                                                <input id="cc-exp" name="Description" type="file"
                                                    class="form-control cc-exp" value="" data-val="true"
                                                    data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <button class="btn btn-info au-btn--block " type="submit"> Ajouter </button>


                                    </div>
                        </div>
                        </form>
                        </form>
                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
