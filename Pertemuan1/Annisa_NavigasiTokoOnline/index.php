<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layouting</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <div class="container" style="background-color:rgb(207, 151, 77)">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <nav class="navbar navbar-expand-lg rounded navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">ANNISA STORE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-outline-warning me-2">Login</button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Link
                        </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </div>
<!-- Header -->
     <?php include "header.php" ?>

<!-- Content -->
        <?php include "content.php" ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row my-1 ">
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="img/dress_wanita.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 146.000</h5>
                            <p class="card-text">dress wanita.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height:  500px;">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/blouse wanita.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 65.000</h5>
                            <p class="card-text">Blouse wanita</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/kemeja wanita.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp79.000</h5>
                            <p class="card-text">kemeja wanita oversize.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/dress formal.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 125.000</h5>
                            <p class="card-text">Dress kekinian </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-1">
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/cloth2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 120.000</h5>
                            <p class="card-text">Baju atasan anak </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height:  500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/kemeja cwok.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 105.000</h5>
                            <p class="card-text">Baju kemeja pria.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ;">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/dress batik.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 145.000</h5>
                            <p class="card-text">Dress remaja.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                            <img src="img/cloth3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rp 150.000</h5>
                            <p class="card-text">cloth wanita dewasa.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
<!-- Footer -->
            <?php include "footer.php" ?>
        </div>
    </div>
</body>

</html>