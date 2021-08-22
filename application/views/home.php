<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teknik Elektro">
    <meta name="author" content="TE">
    <meta name="keywords" content="siporto">

    <!-- Title Page-->
    <title>SiPorto</title>

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
                    <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    
                    <div class="image img-120">
                        <img src="<?= base_url('assets/user.png');?>" alt="Profile" />
                    </div>
                    
                    <h4 class="name">Anda belum login</h4>
                    <a href="#">Silahkan login</a>
                            <form method="POST" action="<?php echo base_url() ?>index.php/Welcome" style="margin-top: 1.5rem;">
                                 <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
                                    <div class="row">
                                         <label for="">Username</label>
                                             <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="far fa-user"></i>
                                                </span>
                                              </div>
                                              <input name="username" type="text" class="form-control form-control-sm" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                              
                                         </div>
                                    </div>
                                     <div class="row">
                                         <label for="">Password</label>
                                             <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                              </div>
                                              <input name="password" type="password" class="form-control form-control-sm" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1" required>
                                         </div>
                                    </div>
                                    
                                    <div class="row">
                                    <button type="submit" class="btn btn-success" style="width: 100%; margin-top:1rem">Login</button>
                                    </div>
                            </form>
                </div>
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
                                    <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="CoolAdmin" />
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
                                            <a href="<?= base_url('Welcome/login');?>" style="color:gray">
                                            <div class="content justify-content-center align-self-center">
                                                <b>Login</b>
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
                        <img src="<?= base_url('assets/main/images/icon/logo-white.png');?>" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                <div class="account2">
                    
                    <div class="image img-120">
                        <img src="<?= base_url('assets/user.png');?>" alt="Profile" />
                    </div>
                    
                    <h4 class="name">Anda belum login</h4>
                    <a href="#">Silahkan login</a>
                            <form method="POST" action="<?php echo base_url() ?>index.php/Welcome" style="margin-top: 1.5rem;">
                                 <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
                                    <div class="row">
                                         <label for="">Username</label>
                                             <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="far fa-user"></i>
                                                </span>
                                              </div>
                                              <input name="username" type="text" class="form-control form-control-sm" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                              
                                         </div>
                                    </div>
                                     <div class="row">
                                         <label for="">Password</label>
                                             <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                              </div>
                                              <input name="password" type="password" class="form-control form-control-sm" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1" required>
                                         </div>
                                    </div>
                                    
                                    <div class="row">
                                    <button type="submit" class="btn btn-success" style="width: 100%; margin-top:1rem">Login</button>
                                    </div>
                            </form>
                    </div>
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
                                            <a data-toggle="modal" data-target="#login" href="#login" class="btn btn-primary-outline"><i class="fas fa-user" style="color:white; font-size:7rem"></i>
                                            <h5 class="card-title text-white" style="padding-top: 1rem;">Data Pribadi</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-4 col-12 col-lg-4">
                                        <div class="card text-white bg-danger ">
                                            <div class="card-body text-center">
                                            <a data-toggle="modal" data-target="#login" href="#login" class="btn btn-primary-outline"><i class="fas fa-newspaper-o" style="color:white; font-size:7rem"></i>
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
            <?php function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }?> 
            <section class="statistic">
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach($view as $v){ 
                                    $tgl = tgl_indo($v->date);
                                    $ch = strlen($v->head);
                                    $cp = strlen($v->pengumuman);?>
                    
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header" style="background-color:#4272d7; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                                        <?php echo "<h4 class='name' style='color:white; font-weight:500'>" ?> <?=$v->judul?> <?php "</h4>" ?><br>
                                        <small style="color:antiquewhite">Last updated <?=$tgl?></small>
                                        </div>
                                        <?php if ($ch==$cp): ?>
                                        <div class="card-body" style="overflow:hidden;">
                                            <?=$v->head?>
                                        </div>
                                        <?php else: ?>
                                        <div class="card-body" style="overflow:hidden;">
                                            <?=$v->head?>...
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" data-toggle="modal" data-target="#pengumuman<?=$v->id?>" class="btn btn-primary">Read More</button>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>

                             <!-- modal pengumuman -->
                             <?php foreach($view as $v){ ?>
                             <div class="modal fade" id="pengumuman<?=$v->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding-top: 5px; padding-bottom: 0px;">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                    <div class="modal-body" style="overflow:hidden; padding-top: 5px; padding-bottom: 0px;">
                                                                    <?php echo "<h3>" ?> <?=$v->judul?> <?php "</h3>" ?><br>
                                                                    <small class="text-muted">Last updated <?=$tgl?></small><hr>
                                                                        <span style="font-weight: normal; font-size:18px; line-height:1.625"><?=$v->pengumuman?></span> 
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                            
                        <!-- modal login -->
                        <?php foreach($view as $v){ ?>
                             <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding-top: 5px; padding-bottom: 0px;">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                    <div class="modal-body" style="overflow:hidden; padding-top: 5px; padding-bottom: 0px;">
                                                                    Anda belum login, silahkan login 
                                                                    </div>
                                                                    <div class="modal-footer" style="justify-content:center; align-items:center">
                                                                        <a href="<?= base_url('Welcome/login');?>"><button type="button" class="btn btn-primary">Login</button></a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 <a href="https://elektro.undip.ac.id/">Teknik Elektro Universitas Diponegoro</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/main/vendor/jquery-3.2.1.min.js');?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/main/vendor/bootstrap-4.1/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/bootstrap-4.1/bootstrap.min.js');?>"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/main/vendor/slick/slick.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/wow/wow.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/animsition/animsition.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/counter-up/jquery.waypoints.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/counter-up/jquery.counterup.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/chartjs/Chart.bundle.min.js');?>"></script>
    </script>
    <script src="<?= base_url('assets/searchable/chosen.jquery.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/searchable/docsupport/prism.js');?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?= base_url('assets/searchable/docsupport/init.js');?>" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    <script src="<?= base_url('assets/main/vendor/circle-progress/circle-progress.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/perfect-scrollbar/perfect-scrollbar.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/select2/select2.min.js');?>">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/main/js/main.js');?>"></script>

    <script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
    } );
    </script>

</body>

</html>