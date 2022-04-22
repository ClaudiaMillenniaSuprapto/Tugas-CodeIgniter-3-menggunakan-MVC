<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<style>
    body {
        background-color: #ffffff;
        font-family: 'Assistant', sans-serif;
        color: #808080;
    }

    .navbar-brand {
        font-family: 'Assistant', sans-serif;
        font-weight: bold;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #d3d3d3;
    }

    .navbar-light .navbar-nav .nav-link.active {
        font-weight: bold;
        color: #808080 !important;
    }

    .btn-navbar-right {
        margin-top: -10px !important;
        margin-bottom: -8px !important;
        margin-right: -18px !important;
        height: 70px;
        border-radius: 0;
    }

    .btn-login {
        width: 95px;
        background-color: #d3d3d3;
        color: #ffffff;
    }

    .btn-login:hover {
        background-color: #418CFD;
        color: #ffffff;
    }

    .btn-login p {
        margin-top: 16px;
    }

    header {
        padding: 180px 0 165px;
        margin-top: -70px;
        background-image: url("../images/header.jpg");
        background-size: cover;
    }

    header h1,
    header p {
        color: #ffffff;
    }

    header h1 {
        font-family: 'Playfair Display', serif;
        font-weight: bold;
        font-size: 50px;
    }

    header p {
        font-size: 20px;
    }

    header .btn-get-started {
        background-color: #FF9E53;
        color: #ffffff;
    }

    header .btn-get-started:hover {
        background-color: #FFAA69;
        color: #ffffff;
    }

    .section-stats {
        margin-top: -50px;
    }

    .section-stats .stats-detail {
        padding-top: 15px;
        background-color: #ffffff;
        padding-left: 40px;
    }

    .section-stats h2 {
        font-size: 30px;
        margin-bottom: 0;
    }

    .section-stats p {
        font-size: 20px;
        font-weight: lighter;
    }

    .section-popular {
        min-height: 540px;
        background-color: #7AAFE0;
        margin-top: -50px;
        margin-bottom: -230px;
    }

    .section-popular-heading {
        margin-top: 150px;
    }

    .section-popular-heading h2,
    .section-popular-heading p {
        color: #ffffff;
    }

    .section-popular-heading h2 {
        font-family: 'Playfair Display', serif;
        font-weight: bold;
    }

    .section-popular-heading p {
        font-size: 18px;
    }

    .section-popular-content .section-popular-travel .card-travel {
        min-height: 380px;
        background-color: #000000;
        color: #ffffff;
        padding: 30px;
        background-size: cover;
        margin-bottom: 20px;
    }

    .section-popular-content .travel-country {
        font-size: 18px;
        color: #ffffff;
    }

    .section-popular-content .travel-location {
        font-size: 26px;
        color: #ffffff;
    }

    .section-popular-content .travel-button .btn-travel-details {
        background-color: #FF9E53;
        color: #ffffff;
    }

    .section-popular-content .travel-button .btn-travel-details:hover {
        background-color: #ffb37a;
        color: #ffffff;
    }

    .section-networks {
        background-color: #ffffff;
        margin-top: -170px;
        padding-top: 240px;
        padding-bottom: 50px;
    }

    .section-networks h2 {
        font-family: 'Playfair Display', serif;
        font-weight: bold;
        font-size: 40px;
    }

    .section-networks p {
        font-size: 18px;
    }

    .section-testimonial-heading {
        background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#f7f9ff));
        background: linear-gradient(#fff 0%, #f7f9ff 100%);
        padding-top: 50px;
        min-height: 506px;
    }

    .section-testimonial-heading h2 {
        font-family: 'Playfair Display', serif;
        font-weight: bold;
        font-size: 40px;
        text-align: center;
    }

    .section-testimonial-heading p {
        font-size: 18px;
    }

    .section-testimonial-content {
        margin-top: -300px;
        padding-bottom: 50px;
    }

    .section-testimonial-content .card-testimonial {
        padding: 40px 20px 10px;
        border-radius: 11px;
        margin-bottom: 20px;
    }

    .section-testimonial-content .card-testimonial .testimonial-content {
        min-height: 380px;
    }

    .section-testimonial-content .card-testimonial h3 {
        font-size: 22px;
    }

    .section-testimonial-content .card-testimonial .testimonial {
        font-weight: 200px;
        font-size: 26px;
        color: #6e6e6e;
        min-height: 160px;
    }

    .section-testimonial-content .card-testimonial .trip-to {
        font-weight: normal;
        font-size: 22px;
        color: #6e6e6e;
    }

    .section-testimonial-content .card-testimonial hr {
        margin-left: -20px;
        margin-right: -20px;
    }

    .btn-get-started {
        background-color: #FF9E53;
        color: #ffffff;
    }

    .btn-get-started:hover {
        background-color: #FFAA69;
        color: #ffffff;
    }

    .btn-need-help {
        background-color: #f8f7f7f2;
        color: #bebebec3;
    }

    .btn-need-help:hover {
        background-color: #e0e0e0;
        color: #ffffffc3;
    }

    .section-footer a {
        color: #808080;
    }

    .section-details-header {
        min-height: 310px;
        background: #E4E6EB;
        margin-top: -70px;
    }

    .section-details-content {
        margin-top: -210px;
        min-height: 100vh;
    }

    .section-details-content .breadcrumb {
        background-color: transparent;
        padding: 0;
        margin-bottom: 30px;
    }

    .section-details-content .breadcrumb-item.active {
        font-weight: bold;
        color: #808080;
    }

    .card-details {
        margin-left: 15px;
        padding: 30px;
        border-radius: 11px;
    }

    .card-details h1 {
        font-size: 26px;
    }

    .card-details h2 {
        font-size: 20px;
    }

    .card-details p {
        font-size: 18px;
        color: #B1B1B1;
    }

    .features {
        margin-top: 20px;
    }

    .features h3 {
        font-size: 18px;
        color: #7AAFE0;
        margin-bottom: 0;
    }

    .features p {
        margin-bottom: 0;
    }

    .features .description {
        margin-left: 10px;
        overflow: hidden;
        float: left;
    }

    .features .features-image {
        width: 45px;
        height: 45px;
        float: left;
    }

    /*# sourceMappingURL=main.css.map */
</style>

<body>

    <!-- NAVBAR -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="welcome" class="navbar-brand" style="color:#808080">
                SIRS
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-2-md-2">
                        <a href="welcome" class="nav-link active">Home</a>
                    </li>
                </ul>
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <a href="Login" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        <p>Login</p>
                    </a>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <a href="Login" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        <p>Login</p>
                    </a>
                </form>
            </div>
        </nav>
    </div>

    <!-- LOGIN -->
    <div class="login text-center" style="margin-top : 70px;">
        <h1 class="fw-bolder">LOGIN</h1>
        <p class="lead fw-normal text-muted mb-0">Masuk Akun</p>
    </div>
    <form class="form-login container" style="margin-top : 30px;">
        <div class="row">
            <div class="col-md-6 offset-md-3 shadow p-3 mb-5 bg-body rounded">
                <div class="mb-3 m-2">
                    <p class="email-text">
                        <label for="email" class="form-label">Username</label>
                    </p>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 m-2">
                    <label for="exampleInputPassword1" class="password-text form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary m-2" href="welcome">Submit</button>
                <a href="SignUp" style="margin-left: 370px;">Sign Up</a>
            </div>
        </div>
    </form>



    <!-- FOOTER -->
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Comunity</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Daftar</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Jalan Raya Bersama Surabaya</a></li>
                                <li><a href="#">0822 - 5715 - 4886</a></li>
                                <li><a href="#">support@sirs.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2022 Copyright - All rights reserved - Made in Surabaya
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>