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
    <link href="<?= base_url('assets/main/vendor/vector-map/jqvmap.min.css');?>" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>

    <!-- Main CSS-->
    <link href="<?= base_url('assets/main/css/theme.css');?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?= base_url('assets/searchable/chosen.css');?>" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="logo" width="250" height="75"/>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <?php if(empty($profile->profile)): ?>
                    <div class="image img-120">
                        <img src="<?= base_url('assets/main/images/icon/avatar-01.png');?>" alt="Profile" />
                    </div>
                    <?php else: ?>
                    <div class="image img-cir img-120">
                        <img src="<?= base_url('assets/fotoProfile');?>/<?=$profile->profile?>" alt="Profile" />
                    </div>
                    <?php endif; ?>
                    <h4 class="name"><?= $profile->nama ?></h4>
                    <a href="<?= base_url('welcome/logout');?>" style="color: red"><b>Sign out</b></a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <?php if (empty($cek)): ?>
                        <li>
                            <a href="<?= base_url('mhs/');?>">
                                <i class="fas fa-home"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('mhs/pribadi');?>">
                                <i class="fas fa-user"></i>Data Pribadi
                            </a>
                        </li> 
                        <li>
                            <a href="<?= base_url('mhs/form');?>">
                                <i class="fas fa-newspaper-o"></i>Portofolio
                            </a>
                        </li> 
                        <?php elseif ($cek=="pribadi"): ?>
                        <li>
                            <a href="<?= base_url('mhs/pribadi');?>">
                                <i class="fas fa-user"></i>Data Pribadi
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('mhs/edit_pribadi');?>">
                                <i class="fas fa-edit"></i>Ubah Data Pribadi
                            </a>
                        </li> 
                        <?php elseif($cek=="portofolio"): ?>
                            <li>
                                <form style="background-color: #365cad; padding: 10px 0px 10px 20px" method="post" onclick="return confirm('Apakah Anda yakin ingin menambah semester? Setelah semester ditambahkan, semester tidak akan dapat dihapus');" action="<?= base_url('Mhs/tambah_semester');?>">
                                    <button type="Submit" style="color:white" data-toggle="tooltip" data-placement="bottom" title="Tambah Semester">
                                        Semester <i class="fas fa-fw fa-plus"></i>
                                    </button>
                                </form>
                            </li>
                            <?php for ($i=1; $i<9; $i++){ ?>
                                <li>
                                    <a href="<?= base_url('mhs/form_semester');?>/<?=$i?>">
                                        <i class="fas fa-book"></i>Semester <?= $i ?>
                                    </a>
                                </li> 
                            <?php } ?>
                            <?php if (empty($semester)): ?>

                            <?php else: ?>
                                <?php foreach($semester as $s) { ?>
                                    <li>
                                        <a href="<?= base_url('mhs/form_semester');?>/<?=$s->semester?>">
                                            <i class="fas fa-book"></i>Semester <?= $s->semester ?>
                                        </a>
                                     </li>
                                <?php } ?>
                            <?php endif; ?>
                        <?php else: 
                            endif;?>   
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                        <div class="header-button-item mr-0 js-sidebar-btn d-lg-none">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="logo" width="250" height="75"/>
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-account"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-edit"></i>
                                            </div>
                                            <a href="<?= base_url('welcome/changePass');?>" style="color:gray">
                                            <div class="content justify-content-center align-self-center">
                                                <b>Ganti&nbsp;Password</b>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-power-off"></i>
                                            </div>
                                            <a href="<?= base_url('welcome/logout');?>" style="color:gray">
                                            <div class="content justify-content-center align-self-center">
                                                <b>Sign&nbsp;Out</b>
                                            </div>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- SIDEBAR TOGLED -->
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="logo" width="250" height="75"/>
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <?php if(empty($profile->profile)): ?>
                        <div class="image img-120">
                            <img src="<?= base_url('assets/main/images/icon/avatar-01.png');?>" alt="Profile" />
                        </div>
                        <?php else: ?>
                        <div class="image img-cir img-120">
                            <img src="<?= base_url('assets/fotoProfile');?>/<?=$profile->profile?>" alt="Profile" />
                        </div>
                        <?php endif; ?>
                        <h4 class="name"><?= $profile->nama ?></h4>
                        <a href="<?= base_url('welcome/logout');?>" style="color: red"><b>Sign out</b></a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                        <?php if (empty($cek)): ?>
                        <li>
                            <a href="<?= base_url('mhs/');?>">
                                <i class="fas fa-home"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('mhs/pribadi');?>">
                                <i class="fas fa-user"></i>Data Pribadi
                            </a>
                        </li> 
                        <li>
                            <a href="<?= base_url('mhs/form');?>">
                                <i class="fas fa-newspaper-o"></i>Portofolio
                            </a>
                        </li> 
                        <?php elseif ($cek=="pribadi"): ?>
                        <li>
                            <a href="<?= base_url('mhs/pribadi');?>">
                                <i class="fas fa-user"></i>Data Pribadi
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('mhs/edit_pribadi');?>">
                                <i class="fas fa-edit"></i>Ubah Data Pribadi
                            </a>
                        </li> 
                        <?php elseif($cek=="portofolio"): ?>
                            <li>
                                <form style="background-color: #365cad; padding: 10px 0px 10px 20px" method="post" onclick="return confirm('Apakah Anda yakin ingin menambah semester? Setelah semester ditambahkan, semester tidak akan dapat dihapus');" action="<?= base_url('Mhs/tambah_semester');?>">
                                    <button type="Submit" style="color:white" data-toggle="tooltip" data-placement="bottom" title="Tambah Semester">
                                        Semester <i class="fas fa-fw fa-plus"></i>
                                    </button>
                                </form>
                            </li>
                            <?php for ($i=1; $i<9; $i++){ ?>
                                <li>
                                    <a href="<?= base_url('mhs/form_semester');?>/<?=$i?>">
                                        <i class="fas fa-book"></i>Semester <?= $i ?>
                                    </a>
                                </li> 
                            <?php } ?>
                            <?php if (empty($semester)): ?>

                            <?php else: ?>
                                <?php foreach($semester as $s) { ?>
                                    <li>
                                        <a href="<?= base_url('mhs/form_semester');?>/<?=$s->semester?>">
                                            <i class="fas fa-book"></i>Semester <?= $s->semester ?>
                                        </a>
                                     </li>
                                <?php } ?>
                            <?php endif; ?>
                        <?php else: 
                            endif;?> 
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->
            <!-- BREADCRUMB-->
        <section class="au-breadcrumb d-none d-lg-block d-xl-block">
                <div class="section__content section__content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span"></span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item seprate">
                                               
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
                    <!-- MENU-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="col-sm-6 col-xl-4 col-6 col-lg-4">
                                        <div class="card text-white bg-primary ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Mhs');?>" class="btn btn-primary-outline"><i class="fas fa-home" style="color:white; font-size:7rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Dashboard</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-6 col-lg-4">
                                        <div class="card text-white bg-success ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Mhs/pribadi');?>" class="btn btn-primary-outline"><i class="fas fa-user" style="color:white; font-size:7rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Data Pribadi</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-4 col-12 col-lg-4">
                                        <div class="card text-white bg-danger ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Mhs/form');?>" class="btn btn-primary-outline"><i class="fas fa-newspaper-o" style="color:white; font-size:7rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Portofolio</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END MENU-->