@extends('template')
@section('title', 'Kaha Visual - Dashboard')
@section('content')
    <div class="container mt-4">
        <!-- Service Start -->
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Our Services</p>
                <h1 class="display-6 mb-4">We Provide Best Professional Services</h1>
            </div>

            <div class="row gap-2 gap-md-0">
                <div class="d-grid col-12 col-md-6">
                    <a href="https://www.youtube.com/@khrisnahari5331" class="btn btn-warning">Portofolio Video</a>
                </div>
                <div class="d-grid col-12 col-md-6">
                    <a href="https://drive.google.com/drive/u/0/folders/1-GOaQfZK174GXNd6A0ifvVR1vuEnFTOt" class="btn btn-warning">Portofolio Photo</a>
                </div>
            </div>

            <div class="row g-3 mt-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Weddings</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Portraits</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Fashion</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Editorial</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    </div>
@endsection
