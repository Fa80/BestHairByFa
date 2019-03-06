<?php 
   // inclue une fois le fichier header.php qui se trouve dans le dossier includes.     
include'includes/header.php';
?> 

 <!DOCTYPE html>
<html lang="fr">
<head>
  <title>Best Hair By Fa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!--  Début container-->
    <div class="container-fluid" id="main">
        <h2 class="text-center mb-3">L'UNIVERS CAPILLAIRE DE BEAUTE</h2>         
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <center><img src="assets/img/thumbnailbh1.jpeg" alt="Los Angeles" class="img-carousel"></center>
      </div>

      <div class="item">
          <center><img src="assets/img/thumbnail8.jpeg" alt="Chicago" class="img-carousel"></center>
      </div>
    
      <div class="item">
          <center><img src="assets/img/thumbnail4.jpeg" alt="New york" class="img-carousel"></center>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    
</body>
</html>
<!--     Fin carousel  -->
<!--  2ème partie accueil-->
<!-- Début -->
<div class="row mt-4">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-wrap="true">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/raid.jpg" alt="straight">
                        <div class="card-body">
                            <h4 class="card-title">Black Straight Hair</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">89€70</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">29€90/P</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/imagedefond.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Brown Straight Hair</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">52€90</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">52€80/P</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/accueil.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Yaki Hair</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">42€90</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">42€80/P</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/bodyombre.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Body Wave</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">120€90</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">40€30/P</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fas fa-chevron-left fa-2x" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="fas fa-chevron-right fa-2x" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<!--  fin --> 
<!--  3ème partie accueil-->
<!-- Début -->
<div class="row mt-4">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-wrap="true">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid"  src="assets/img/bdw.jpg" alt="straight">
                        <div class="card-body">
                            <h4 class="card-title">Spring Curly</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">89€70</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">29€90/P</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/27430.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Kinky Curly</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">52€90</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">52€80/P</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/blue.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Blue Hair</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">42€90</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">42€80/P</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="assets/img/curlyit.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Deep Wave</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <span class="productPrice float-left badge badge-pill badge-info">120€90</span>
                                <a class="float-right" href="#" class="card-link"><i class="fas fa-cart-plus fa-2x mr-3"></i></a>
                                <a class="float-right" href="#" class="card-link"> <i class="fa fa-share-alt grey-text mr-3"></i></a>
                            </div>
                            <div class="basePrice float-left font-weight-light pl-3">40€30/P</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fas fa-chevron-left fa-2x" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="fas fa-chevron-right fa-2x" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Fin container --> 
     <?php     
     require'includes/footer.php';     
       ?>  
</body>
</html>

