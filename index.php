<?php
require 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Small Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet"/>
        <style media="screen">
       </style>
       <!--leaflet Maps-->
       <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    </head>
    <body>
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-1">
                    <img class ="LogoDamkar"  style="width: 60px; height: 60px; left: 10px; margin-right: 2%; top: 4px" src="https://i.postimg.cc/zXrhx58v/cropped-yudha-brama-jaya-removebg-preview-2-270x270.png" />
                    <a class="navbar-brand" href="#!">Damkar Banyuwangi</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-1">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-5" style="padding-left: 3%; padding-top: 3%;">
                    <div class="containerBanner">
                    <div class="wrapper1">
                        <img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg">
                        <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg">
                        <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg">
                        <img src="https://cdn.wallpapersafari.com/24/98/dwMtqD.jpg">
                </div>
            </div>
            <br>
            </div>
                <div class="col-lg-7">
                    <h1 class="font-weight-light">Dinas Pemadam Kebakaran Dan Penyelamatan Kabupaten Banyuwangi</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary" href="#!">Selengkapnya..</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-danger my-5 py-2 text-center">
                <div class="btn btn-danger">
                    <p class="text-white m-0 my-1 py-1" href="#!">
                        <h2>LAPOR SEKARANG !!!</h2>
                    </p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Regulasi</h2> <br>
                            <div class="container"> <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="gambar"></div> <br>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="regulasi.php">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Berita</h2> <br>
                            <div class="container"> <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="gambar"></div> <br>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="berita.php">More Info</a></div>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Indek Kepuasan Masyarakat -->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-5 mb-5" style="display: flex;">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Kepuasan Masyarakat</h4> <br>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" style="margin-left: 10%;">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">komentar</label>
                                    <input type="text" placeholder="masukkan komentar..." style="margin-left: 2%; position: relative;">
                                </div>
                                <br>
                                <span class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                </span> 
                            </div>
                        <div class="card-footer text-center"><a class="btn btn-primary btn-sm" href="#!">Kirim</a></div>
                    </div>
                </div>
            <!--Maps-->
                <div class="col-md-7 mb-5 ">
                    <div id="map" >
                        <script src="js/maps.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>