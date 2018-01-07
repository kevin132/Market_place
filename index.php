<!DOCTYPE html>
<html lang="en">
<head>

    <title>Amazon.fr</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link to bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!--Css link-->
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/search.css">




</head>

<?php
include('header.php');
?>
<body>
<!-- carousel bootstrap-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="assets/home_images/paddington.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/home_images/kindle.jpg"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid"
                 src="assets/home_images/cadeau_promotion.jpg"
                 alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid"
                 src="assets/home_images/idea.jpg"
                 alt="fourth slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid"
                 src="assets/home_images/delivery.jpg"
                 alt="fifth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!--delivery block information-->
<div class="container-fluid">
    <div class="col-lg-12 d-flex justify-content-center align-items-center" id="delivery">
        <h2 class="info">Livraison gratuite dès 25€ éligibles</h2>
    </div>

</div>


<!--christmas promo  information-->
<!--column responsive-->

<section class="container-fluid">
    <section id="christmas">
        <h2 class="promo">Noël : idées cadeaux et Ventes Flash</h2>
        <img src="assets/home_images/seprateur.png" alt="separateur">
        <div class="container mt-3 ">
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-3 mb-3  d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/boutique.jpg" alt="boutique de noël">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-3 mb-3 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/rush.jpg" alt="rush de noël">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-3 mb-3 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/toys.jpg"
                                 alt="promotion jeux et jouets">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-6 col-6 mt-3 mb-3 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/high_tech.jpg"
                                 alt="promotion high-tech">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 mt-3 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/kitchen.jpg" alt="Promotion cuisine">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 mt-3 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/garden.jpg"
                                 alt="Promotion bricolage et jardin">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 mt-3 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/video_game.jpg"
                                 alt="Promotion jeux vidéo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 mt-3 mb-3 col-sm-6 col-6 d-flex flex-column align-items-center">
                    <div class="grow">
                        <a href="">
                            <img class="resize" src="assets/home_images/mode.jpg" alt="Promotion mode">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</section>


<!--selection by category pink block-->

<!--hover onclick modal of bootstrap-->
<section id="category-shop">
    <section class="container">
        <h2 class="promo mt-4 text-center">Meilleurs ventes par catégories</h2>

        <p class="title-shop">Mode</p>
        <div class="category-content">

            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">

                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/tee-shirt.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>


                        </div>

                    </div>
                </div>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/bluepull.jpg"
                             alt="First slide">
                        <div class="overlay">

                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/glove.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/redpull.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/redpull1.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/dress.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="title-shop mt-3">High Tech</p>
        <div class="category-content">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/watch1.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/watch2.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/watch3.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/watch4.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/board.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                    <div class="hovereffect">
                        <img class="resize" src="assets/home_images/drone.jpg"
                             alt="First slide">
                        <div class="overlay">
                            <p>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--collapse bootstrap-->
        <div id="exampleAccordion" data-children=".item">
            <div id="exampleAccordion2" class="collapse" role="tabpanel">
                <div class="hide mt-3">

                    <p class="title-shop">Jeux et jouets</p>
                    <div class="category-content">

                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">

                                    <img class="resize"
                                         src="assets/home_images/tee-shirt.jpg"
                                         alt="First slide">

                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/bluepull.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/glove.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/redpull.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/redpull1.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/dress.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hide mt-3">
                    <p class="title-shop">Livres</p>
                    <div class="category-content">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/watch1.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/watch2.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/watch3.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/watch4.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/board.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex flex-column align-items-center">
                                <div class="hovereffect">
                                    <img class="resize"
                                         src="assets/home_images/drone.jpg"
                                         alt="First slide">
                                    <div class="overlay">
                                        <p>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Voir aperçu</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item text-center">
                <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2"
                   aria-expanded="false" aria-controls="exampleAccordion2">
                    <button type="button" class="btn btn-outline-primary mt-3">Voir Plus</button>
                </a>
            </div>
        </div>
    </section>

</section>


<section id="promo">
    <h2 class="info-shop text-center">Simplifiez <span class="info-shop">vos achats</span></h2>
    <div class="container">
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem
            consequuntur debitis distinctio dolorem eius enim incidunt iusto, labore magni mollitia nesciunt obcaecati
            optio quisquam reiciendis rem sint voluptatem voluptates.</p>
    </div>
    <div class="container pt-2">
        <div class="row">
            <div class="col-lg-6 pl-2">
                <img src="assets/home_images/sapin.png" alt="sapin">
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 mb-4">
                    <img src="assets/home_images/cheque.jpg" class="block3 rounded" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="assets/home_images/flash.jpg" class="block3 rounded" alt="">
                </div>
            </div>

        </div>

    </div>


</section>

<!--card-->

<section id="best">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="assets/home_images/boutique.jpg" alt="Card image cap">
                    <div class="card-body d-flex align-items-center flex-column">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        </p>
                        <a href="#" class="btn btn-primary">Voir Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="assets/home_images/boutique.jpg" alt="Card image cap">
                    <div class="card-body d-flex align-items-center flex-column">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        </p>
                        <button type="button" class="btn btn-outline-primary waves-effect">Primary</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="assets/home_images/boutique.jpg" alt="Card image cap">
                    <div class="card-body d-flex align-items-center flex-column">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        </p>
                        <button type="button" class="btn btn-unique">Unique</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="assets/home_images/flash.jpg" alt="Card image cap">
                    <div class="card-body d-flex align-items-center flex-column">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        </p>
                        <a href="#" class="btn btn-primary">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('footer.php');
?>
<!--link to javascript-->

<script type="text" src="assets/js/app.js"></script>

</body>
</html>