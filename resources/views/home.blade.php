<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KahaVisual - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary">Kaha Visual</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            </div>
            <a href="{{ route('home') }}" class="navbar-brand bg-primary py-2 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-white">Kaha Visual</h1>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <p class="text-primary text-uppercase mb-2 animated slideInDown">Welcome To Kaha Visual</p>
                    <h1 class="mb-3 animated slideInDown">Design, Photographer and Videographer</h1>
                    <p class="animated slideInDown text-rata">KAHA VISUAL adalah usaha yang melayani jasa dalam segala bentuk
                        jenis visual seperti desain, fotografi dan videografi. KAHA VISUAL menyediakan beberapa paket
                        jasa fotografi dan videografi yaitu: corporate event, prewedding dan wedding event, birthday
                        event, shortfilm, yearbook, photoshoot model dan produk.</p>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="{{ url('dashboard') }}" class="btn btn-primary py-3 px-4 me-5">Pesan Sekarang</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white p-3 w-100 mb-3" src="img/image/photoshoot1.jpg"
                                alt="">
                            <img class="img-fluid bg-white p-3 w-50" src="img/image/foto-berpasangan.jpg"
                                alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white p-3 w-50 mb-3" src="img/image/shoot-nari.jpg" alt="">
                            <img class="img-fluid bg-white p-3 w-100" src="img/image/praba.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3 img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid bg-light p-2" src="img/image/3bulanan2.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid bg-light p-3" src="img/image/pasangan2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">About Us</p>
                        <h1 class="display-6 mb-4">Platform Konten Visual Kreatif Dan Berkualitas Tinggi</h1>
                        <p class="text-rata">Kami adalah platform yang menyediakan jasa pemesanan konten visual yang
                            kreatif dan berkualitas tinggi. Kami memahami betapa pentingnya konten visual yang menarik
                            dan memikat untuk mendukung keberhasilan bisnis, membangun merek, atau mengkomunikasikan
                            pesan dengan efektif.</p>
                        <p class="text-rata">Tim kami terdiri dari sekelompok profesional yang berbakat di bidang
                            desain grafis, fotografi, dan videografi. Kami dapat membantu menggambarkan pesanan anda
                            melalui konten visual yang menarik dan berkualitas tinggi. Layanan yang kami tawarkan
                            meliputi:</p>
                        <div class="row g-2 mb-4">
                            <div>
                                <i class="fa fa-check text-primary text-rata"></i> <span class="fw-bold"> Desain
                                    Grafis </span>(logo, brosur, pamflet, undangan, dan lainnya)
                            </div>
                            <div class="row g-2 mb-4">
                                <div>
                                    <i class="fa fa-check text-primary text-rata"></i> <span class="fw-bold">
                                        Fotografi </span>(pemotretan produk, model, prewedding, foto studio, dokumentasi
                                    acara, dan lainnya sesuai kebutuhan)
                                </div>
                                <div class="row g-2 mb-4">
                                    <div>
                                        <i class="fa fa-check text-primary text-rata"></i> <span class="fw-bold">
                                            Videografi </span>(video promosi, video tutorial, film pendek atau konten
                                        video lainnya)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


            <!-- Team Start -->
            <div class="container-xxl px-0 py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="text-primary text-uppercase mb-2">Our Team</p>
                    <h2 class="mb-0">Creative Designer Photograher And Videographer</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 flex-sm-row">
                            <div class="col-sm-6">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="img/team-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="h-100 p-5 d-flex flex-column justify-content-between">
                                    <div class="mb-3">
                                        <h4>Dhiva Wardana</h4>
                                        <span>Desain Grafis & Editor</span>
                                    </div>
                                    <p>20 Tahun <br> Jl. Sibang Kaja No. 30 Abiansemal, Kabupaten Badung </p>
                                    <div class="d-flex">
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fas fa-phone"></i></a>
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row g-0 flex-sm-row-reverse flex-lg-row">
                            <div class="col-sm-6">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="img/team-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="h-100 p-5 d-flex flex-column justify-content-between">
                                    <div class="mb-3">
                                        <h4>Surya Negara</h4>
                                        <span>Photograher</span>
                                    </div>
                                    <p>20 Tahun <br> Jl. Kertanegara Gg. Taman Sari III Ubung Kaja, Kota Denpasar </p>
                                    <div class="d-flex">
                                      
                                    <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fas fa-phone"></i></a>
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 flex-lg-row-reverse">
                            <div class="col-sm-6">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="h-100 p-5 d-flex flex-column justify-content-between">
                                    <div class="mb-3">
                                        <h4>Gung Krisna</h4>
                                        <span>Videographer</span>
                                    </div>
                                    <p>21 Tahun <br> Jl. Sutomo No. 110 Pemecutan Kaja, Kota Denpasar </p>
                                    <div class="d-flex">
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fas fa-phone"></i></a>
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row g-0 flex-sm-row-reverse">
                            <div class="col-sm-6">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="img/team-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="h-100 p-5 d-flex flex-column justify-content-between">
                                    <div class="mb-3">
                                        <h4>Vira Aulia Salsabila</h4>
                                        <span>Ide Kreatif & Model Produk</span>
                                    </div>
                                    <p>22 Tahun <br> Jl. Toh Jaya No. 25 Ubung Kaja, Kota Denpasar </p>
                                    <div class="d-flex">
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fas fa-phone"></i></a>
                                        <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->



    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 mt-5 py-5 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="display-5 text-primary">KAHA VISUAL</h1>
                </a>
                <p>KAHA VISUAL adalah usaha yang melayani jasa dalam segala bentuk jenis visual seperti desain,
                    fotografi dan videografi. KAHA VISUAL menyediakan beberapa paket jasa fotografi dan videografi
                    yaitu: corporate event, prewedding dan wedding event, birthday event, shortfilm, yearbook,
                    photoshoot model dan produk.</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>Jl. Katjong Seleman 1 No. 2 Br. Bersih Desa Adat Tegal
                    Darmasaba, Abiansemal,Badung, Bali (80352)</p>
                <p><i class="fa fa-phone-alt me-2"></i>+61812 3866 7261</p>
                <p><i class="fa fa-envelope me-2"></i>khvisualproject@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                            class="fas fa-phone"></i></a>
                    <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Popular Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white border-top border-secondary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Kaha Visual</a>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
