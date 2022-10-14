<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>

    <!-- Custom style -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/produk-style.css" />
    <link rel="stylesheet" href="/css/layanan-style.css" />
    <link rel="stylesheet" href="/css/kegiatan-style.css" />
    <title>Beranda | CV Laksana Abadi</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bgdarkblue py-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white logo" href="#">CV. Laksana Bahari</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/service" data-bs-toggle="dropdown">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/service#layanan1"> Ship Builder</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/service#layanan2"> Repairing </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/service#layanan3"> Maintenance </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/product" data-bs-toggle="dropdown">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/product#kapal"> Kapal Ikan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/product#kapal">
                                    Kapal Nelayan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="kegiatan.html" data-bs-toggle="dropdown">
                            Kegiatan
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="kegiatan.html">
                                    Dalam Perusahaan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="kegiatan.html">
                                    Luar Perusahaan
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a class="btn__nav text-decoration-none" href="#contact">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bgdarkblue">
        <div class="wx mx-auto pt-5">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h4 class="text-white fwmed">CV. Satria Laksana Bahari</h4>
                    <h6 class="grey mt-3">
                        Jl. Yos Sudarso Utara 28 Seturi - Batang Prov. Jawa Tengah Telp :
                        0285-7910914 Email : ottoko_hansamu@yahoo.co.id
                    </h6>
                </div>
                <div class="navigation col-12 col-lg-8 mt-lg-0 mt-4">
                    <div class="row justify-content-lg-end justify-content-md-start justify-content-between">
                        <div class="col-md-3 col-sm-4 col-6">
                            <div class="item">
                                <h5 class="text-white">Layanan</h5>
                                <div class="mt-lg-3 mt-2">
                                    <a href="" class="grey text-decoration-none">Shipping Building</a>
                                </div>
                                <div class="mt-1">
                                    <a href="" class="grey text-decoration-none">Repairing</a>
                                </div>
                                <div class="mt-1">
                                    <a href="" class="grey text-decoration-none">Maintenance</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6">
                            <div class="item">
                                <h5 class="text-white">Produk</h5>
                                <div class="mt-lg-3 mt-2">
                                    <a href="" class="grey text-decoration-none">Kapal Ikan</a>
                                </div>
                                <div class="mt-1">
                                    <a href="" class="grey text-decoration-none">Kapal Nelayan</a>
                                </div>
                                <div class="mt-1">
                                    <a href="" class="grey text-decoration-none">Lain - lain</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 mt-sm-0 mt-2">
                            <div class="item">
                                <h5 class="text-white">Kegiatan</h5>
                                <div class="mt-lg-3 mt-2">
                                    <a href="" class="grey text-decoration-none">Dalam Perusahaan</a>
                                </div>
                                <div class="mt-1">
                                    <a href="" class="grey text-decoration-none">Luar Perusahaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-2">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <a href="">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="border-top py-3 text-white text-center">
                Copyright 2022. CV Satria Laksana Bahari.
            </div>
        </div>
    </footer>

    <!-- Custom Js -->
    <script src="/scripts/main.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Fontawesome Icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>