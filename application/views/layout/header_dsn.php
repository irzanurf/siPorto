<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teknik Elektro">
    <meta name="author" content="TE">
    <meta name="keywords" content="sitomas">

    <!-- Title Page-->
    <title>SiTomas</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/main/css/font-face.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/main/vendor/bootstrap-4.1/bootstrap.min.css');?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/main/vendor/animsition/animsition.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/wow/animate.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/css-hamburgers/hamburgers.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/slick/slick.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/main/vendor/perfect-scrollbar/perfect-scrollbar.css');?>" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>

    <!-- Main CSS-->
    <link href="<?= base_url('assets/main/css/theme.css');?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block" style="background-color:#007bff">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="logo" width="250" height="75"/>
                        </a>
                    </div>
                    <div class="header__navbar" style="text-align: right;">
                        <ul class="list-unstyled">
                            <li>
                                <a href="<?= base_url('/');?>" >
                                    <i class="fas fa-home"></i>
                                    <span class="bot-line"></span>Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('dsn/datamhs');?>">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Data Mahasiswa</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="<?= base_url('assets/lecture.png');?>" alt="lecture" />
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="<?= base_url('assets/lecture.png');?>" alt="lecture" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?= $profile->nama ?></a>
                                            </h5>
                                            <span class="email"><?= $profile->jabatan ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="<?= base_url('welcome/changePass');?>">
                                            <i class="zmdi zmdi-edit"></i>Ganti Password</a>
                                        <a href="<?= base_url('welcome/logout');?>">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none" style="background-color:#007bff">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="logo" width="250" height="75"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="<?= base_url('/');?>" >
                                    <i class="fas fa-home"></i>
                                    <span class="bot-line"></span>Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('dsn/datamhs');?>">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Data Mahasiswa</a>
                            </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="<?= base_url('assets/lecture.png');?>" alt="lecture" />
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/lecture.png');?>" alt="lecture" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?= $profile->nama ?></a>
                                    </h5>
                                    <span class="email"><?= $profile->jabatan ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="<?= base_url('welcome/changePass');?>">
                                    <i class="zmdi zmdi-edit"></i>Ganti Password</a>
                                <a href="<?= base_url('welcome/logout');?>">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->