<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="<?= base_url('assets/main/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
<link href="<?= base_url('assets/main/vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
<link href="<?= base_url('assets/main/css/theme.css');?>" rel="stylesheet" media="all">
<style>
    hr.rounded {
  border-top: 8px solid #00B0F0;
  border-radius: 5px;
}

    .bg {
        background-image:url("<?= base_url('assets/background.jpg');?>")
    }

    @media print {
.bg {-webkit-print-color-adjust: exact;}
}

/* @media print {
  @page { margin: 0; }
  body { margin-top: 3cm; margin-bottom: 2cm; }
} */
</style>
<?php
function tgl_indo($tanggal){
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
}   
?>
</head>
<body>
    <input type="hidden" value="<?=$url?>" id="url">
    <!-- Kegiatan Personal -->
    <div class="row bg">
        <div class="col-md-4">
            <img style="margin-left: 15px; margin-top:5px; margin-bottom:5px; float: right;" src="<?= base_url('assets/undip.png');?>" alt="Undip" width="20%"/>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h1 style="color: white; vertical-align:middle">
                    Curriculum Vitae
                </h1>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-4">
            <h3 style="text-align: right;">
                Informasi Personal
            </h3><br>
            <?php if (!empty($diri->profile)) { ?>
            <img src="<?= base_url('assets/fotoProfile');?>/<?=$diri->profile?>" alt="Profile" width="150" style="float: right;"/>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <h4><?= $diri->nama ?></h4><br>
            <table>
                <tr>
                    <td>
                        <i class="fas fa-map-marker" style="color: #00B0F0;"></i>
                    </td>
                    <td>
                        &nbsp;<span> <?= $diri->alamat ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-phone" style="color: #00B0F0;"></i>
                    </td>
                    <td>
                        &nbsp;<span> <?= $diri->no_hp ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-envelope" style="color: #00B0F0;"></i>
                    </td>
                    <td>
                        &nbsp;<span> <?= $diri->email ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-graduation-cap" style="color: #00B0F0;"></i>
                    </td>
                    <td>
                        &nbsp;<span> Teknik Elektro, Universitas Diponegoro</span>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        &nbsp;<span> <?=$diri->konsentrasi?></span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-2">
            <div id="qrcode"></div>
        </div>
    </div><br>

    <!-- Kegiatan Akademik -->
    <?php if(!empty($magang)) { ?>
    <div class="row">
        <div class="col-md-4">
            <h3 style="text-align: right;">
                Kegiatan Akademik
            </h3>
        </div>
        <div class="col-md-8">
            <hr class="rounded">
        </div>
    </div>
    <?php foreach ($magang as $m) { 
        $tgl_awal = tgl_indo($m->tgl_awal);
        $tgl_akhir = tgl_indo($m->tgl_akhir)?>
    <div class="row">
        <div class="col-md-4">
            <span style="float: right; color: #081E81;">
                <?=$tgl_awal?> - <?=$tgl_akhir?>
            </span>
        </div>
        <div class="col-md-8">
            <span style="color: black; font-size:18px">
                <?=$m->posisi?>
            </span><br>
            <span style="font-size:14px">
                <?=$m->nama?> (<?=$m->kategori?>)
            </span><br>
            <span style="color: black; font-size:16px">
                <?=$m->topik?>
            </span><br>
        </div>
    </div><br>
    <?php } } ?>

    <!-- Prestasi -->
    <?php if(!empty($prestasi)) { ?>
    <div class="row">
        <div class="col-md-4">
            <h3 style="text-align: right;">
                Prestasi
            </h3>
        </div>
        <div class="col-md-8">
            <hr class="rounded">
        </div>
    </div>
    <?php foreach ($prestasi as $p) { 
        $tgl_awal = tgl_indo($p->tgl_awal);
        $tgl_akhir = tgl_indo($p->tgl_akhir)?>
    <div class="row">
        <div class="col-md-4">
            <span style="float: right; color: #081E81;">
                <?=$tgl_awal?> - <?=$tgl_akhir?>
            </span>
        </div>
        <div class="col-md-8">
            <span style="color: black; font-size:18px">
                <?=$p->prestasi?> (<?=$p->tingkat?>) - <?=$p->nama?>
            </span><br>
            <span style="font-size:14px">
                <?=$p->penyelenggara?>
            </span><br>
            <span style="color: black; font-size:16px">
                <?=$p->judul?>
            </span><br>
        </div>
    </div><br>
    <?php } } ?>

    <!-- Kegiatan Organisasi -->
    <?php if(!empty($aktivitas)) { ?>
    <div class="row">
        <div class="col-md-4">
            <h3 style="text-align: right;">
                Kegiatan Organisasi
            </h3>
        </div>
        <div class="col-md-8">
            <hr class="rounded">
        </div>
    </div>
    <?php foreach ($aktivitas as $a) { 
        $tgl_awal = tgl_indo($a->tgl_awal);
        $tgl_akhir = tgl_indo($a->tgl_akhir)?>
    <div class="row">
        <div class="col-md-4">
            <span style="float: right; color: #081E81;">
                <?=$tgl_awal?> - <?=$tgl_akhir?>
            </span>
        </div>
        <div class="col-md-8">
            <span style="color: black; font-size:18px">
                <?=$a->jabatan?>
            </span><br>
            <span style="font-size:14px">
                <?=$a->nama?> - <?=$a->tingkat?>
            </span><br>
        </div>
    </div><br>
    <?php } } ?>

    <!-- Kompetensi Mahasiswa -->
    <?php if(!empty($kompetensi)) { ?>
    <div class="row">
        <div class="col-md-4">
            <h3 style="text-align: right;">
                Kompetensi
            </h3>
        </div>
        <div class="col-md-8">
            <hr class="rounded">
        </div>
    </div>
    <?php foreach ($kompetensi as $k) { ?>
    <div class="row">
        <div class="col-md-4">
            <span style="float: right; color: #081E81;">
                <?=$k->rumpun?>
            </span>
        </div>
        <div class="col-md-8">
            <span style="color: black; font-size:18px">
                <?=$k->nama?>
            </span><br>
        </div>
    </div><br>
    <?php } } ?>

</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/main/js/jquery-qrcode/jquery.qrcode.min.js');?>"></script>
    <script>
        window.onload = function(){

        // Clear Previous QR Code
        $('#qrcode').empty();

        // Generate and Output QR Code
        $('#qrcode').qrcode({
            width: 128,
            height: 128,
            text: $('#url').val(),
            // src: "<?= base_url('assets/undip.png') ?>",
            // imgWidth: 50,
            // imgHeight: 60
            });

        };
    </script>
    
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/main/vendor/bootstrap-4.1/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/main/vendor/bootstrap-4.1/bootstrap.min.js');?>"></script>
    <script type="text/javascript">
    window.print();
    </script>
</html>