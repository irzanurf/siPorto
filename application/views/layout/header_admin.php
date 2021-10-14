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
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4" style="background: #007bff">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="<?= base_url('assets/main/images/icon/logo-blue.png');?>" alt="logo" width="250" height="75" />
                        </a>
                    </div>
                    <div class="header__tool">
                        
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="<?= base_url('assets/main/images/icon/avatar-02.jpg');?>" alt="Profile" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="<?= base_url('assets/main/images/icon/avatar-02.jpg');?>" alt="Profile" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Admin</a>
                                            </h5>
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
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40" style="background: #f7f7f7">
            <div class="container">
            <div class="row">
                                    <div class="col-xl-3 col-6 col-sm-6 col-lg-3">
                                        <div class="card text-white bg-primary ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Admin/pengumuman');?>" class="btn btn-primary-outline"><i class="fas fa-bullhorn" style="color:white; font-size:6rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Pengumuman</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-6 col-sm-6 col-lg-3">
                                        <div class="card text-white bg-success ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Admin/datamhs');?>" class="btn btn-primary-outline"><i class="fas fa-newspaper-o" style="color:white; font-size:6rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Portofolio</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-6 col-sm-6 col-lg-3">
                                        <div class="card text-white bg-warning ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Admin/akunmhs');?>" class="btn btn-warning-outline"><i class="fas fa-user" style="color:white; font-size:6rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Akun Mahasiswa</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-6 col-sm-6 col-lg-3">
                                        <div class="card text-white bg-danger ">
                                            <div class="card-body text-center">
                                            <a href="<?= base_url('Admin/akundsn');?>" class="btn btn-danger-outline"><i class="fas fa-address-book" style="color:white; font-size:6rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Akun Dosen</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                        </div>
            </div>
        
        <!-- END WELCOME-->
                </div>
            </section>
        <div class="page-container3">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-12">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        

                                    <?php if (empty($cek)): ?>
                                        <li class="active">
                                            <a href="#" style="color: white;">
                                                <i class="fas fa-gear" style="color:white;"></i>Menu</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/');?>">
                                                <i class="fas fa-home"></i>Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/pengumuman');?>">
                                                <i class="fas fa-bullhorn"></i>Pengumuman</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/datamhs');?>">
                                                <i class="fas fa-newspaper-o"></i>Portofolio</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/akunmhs');?>">
                                                <i class="fas fa-user"></i>Akun Mahasiswa</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/akundsn');?>">
                                                <i class="fas fa-user-secret"></i>Akun Dosen</a>
                                        </li>
                                        <?php elseif ($cek=="pribadi"): ?>
                                        <li class="active">
                                            <a href="#" style="color: white;">
                                                <i class="fas fa-gear" style="color:white;"></i>Menu</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/pribadi');?>">
                                                <i class="fas"></i>Data Mahasiswa</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url("Admin/edit_pribadi?nim=$nim");?>">
                                                <i class="fas"></i>Ubah Data Mahasiswa</a>
                                        </li>
                                        <?php elseif($cek=="portofolio"): ?>
                                        <li>
                                            <form style="background-color: #4272d7; padding: 10px 0px 10px 20px" method="post" onclick="return confirm('Apakah Anda yakin ingin menambah semester? Setelah semester ditambahkan, semester tidak akan dapat dihapus');" action="<?= base_url('Admin/tambah_semester');?>">
                                                <input type="hidden" name="nim" value="<?= $nim ?>">
                                                <button type="Submit" style="color:white" data-toggle="tooltip" data-placement="bottom" title="Tambah Semester">
                                                    Semester <i class="fas fa-fw fa-plus"></i>
                                                </button>
                                            </form>
                                        </li>
                                            <?php for ($i=1; $i<9; $i++){ ?>
                                                <li>
                                                    <a href="<?= base_url('Admin/form_semester');?>?nim=<?=$nim?>&semester=<?=$i?>">
                                                        <i class="fas fa-book"></i>Semester <?= $i ?>
                                                    </a>
                                                </li> 
                                            <?php } ?>
                                            <?php if (empty($semester)): ?>

                                            <?php else: ?>
                                                <?php foreach($semester as $s) { ?>
                                                    <li>
                                                        <a href="<?= base_url('Admin/form_semester');?>?nim=<?=$nim?>&semester=<?=$i?>">
                                                            <i class="fas fa-book"></i>Semester <?= $s->semester ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            <?php endif; ?>
                                        <?php else: ?>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
