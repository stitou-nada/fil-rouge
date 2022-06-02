@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER LE PRODUIT</strong>
        </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Modifier</div>
                            <div class="card-body ">
                                <div class="row tm-edit-product-row  ">
                                    <div class="col-xl-6 col-lg-12 col-md-12">

                                        <!-- start modifier -->

                                        <form method="POST" enctype='multipart/form-data'
                                            class="tm-edit-product-form">
                                            <div class="form-group mb-3">
                                                <input type="hidden" name="id" value="">
                                                <label for="name">Produit
                                                </label>
                                                <input id="name" name="nom_produit" type="text"
                                                    class="form-control validate" required
                                                    value="">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="name">Prix
                                                </label>
                                                <input id="name" name="prix" type="text"
                                                    class="form-control validate" required value="" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="description">Description</label>
                                                <input class="form-control validate" rows="3" required
                                                    name="description" value="">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="category">Categorie</label>
                                                <select class="custom-select tm-select-accounts"
                                                    id="category" name="categorie_produit">

                                                    <option selected></option>


                                                    <option value=""></option>


                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                                    <label for="expire_date">Expiration Date
                                                    </label>
                                                    <input id="expire_date" name="date_d'expiration"
                                                        type="date" class="form-control validate"
                                                        data-large-mode="true" value="" />
                                                </div>
                                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                                    <label for="stock">Quantite de stock
                                                    </label>
                                                    <input id="stock" name="quantite_stock" type="text"
                                                        class="form-control validate" required value="" />
                                                </div>
                                            </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class=" mx-auto">
                                            <img src="img/ZZZ.PNG"
                                                class="tm-product-img-dummy mx-auto" alt="">
                                        </div>
                                        <div class="custom-file mt-3 mb-3">

                                            <input class="btn btn-primary btn-block mx-auto col-lg-6"
                                                value="UPLOAD PRODUCT IMAGE" type="file" name="image" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase">Ajouter</button>
                                    </div>
                                    </form>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>


@endsection