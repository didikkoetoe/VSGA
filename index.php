<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="input-group w-50 me-5">
                <input class="form-control" type="search" placeholder="Cari Barang" aria-label="Search">
                <div class="input-group-text"><i class="bi bi-search"></i></div>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <!-- Cart -->
                    <a class="nav-link" aria-current="page" href="#"><i class="bi bi-cart-fill fs-5 me-3 mx-5"></i></a>
                    <!-- Bell -->
                    <a class="nav-link" href="#"><i class="bi bi-bell-fill fs-5 me-3"></i></a>
                    <!-- Message -->
                    <a class="nav-link" href="#"><i class="bi bi-envelope-fill fs-5 me-3"></i></a>

                </div>
            </div>
            <div class="d-flex">
                <div class="dropdown me-2">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Didik Prabowo
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Setting Akun</a></li>
                        <li><a class="dropdown-item" href="#">Ubah Tema</a></li>
                        <li><a class="dropdown-item" href="#">Hal Lain</a></li>
                    </ul>
                </div>

                <button class="btn btn-danger">Log Out</button>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container-fluid mt-3">
        <div class="row gx-3">
            <div class="col-2">
                <div class="container border rounded bg-light">
                    <h4 class="text-center mt-3">Filter</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item">Terjual</li>
                        <li class="list-group-item">Rating</li>
                        <li class="list-group-item">Jarak</li>
                        <li class="list-group-item">Harga</li>
                        <li class="list-group-item">Diskon</li>
                    </ul>
                </div>
            </div>
            <div class="col-10">
                <div class="container mt-2 border rounded-top bg-light">
                    <h4 class="text-center">Handphone</h4>
                </div>
                <div class="container border rounded-bottom">
                    <div class="row">
                        <div class="col-4">
                            <div class="card mb-3 mt-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-3 mt-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-3 mt-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-3 mt-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-3 mt-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-3 mt-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>