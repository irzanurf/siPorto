            <section class="statistic" style="padding-top: 10px;">
                        <div class="container-fluid">
                                <!-- Akademik -->
                                <div class="card">
                                    <div class="card-body">
                                        <nav aria-label="Page navigation">
                                        <h3 style="text-align:center; color:blue;">Semester<h3>
                                            <ul class="pagination justify-content-center">
                                            <?php
                                                for ($i=1; $i<9; $i++){ ?>
                                                <li class="page-item">
                                                <form style="display:inline-block;" method="get" action="<?= base_url('dsn/form_semester');?>">
                                                <input type='hidden' name="nim" value="<?=$nim?>">
                                                <input type='hidden' name="semester" value="<?=$i?>">
                                                <button type="Submit" class="page-link">
                                                   <h3 style="font-weight: normal;"> <?= $i ?> </h3>
                                                </button>
                                                </form></li>
                                                <?php } ?>
                                                <?php if (empty($sem)): ?>

                                                <?php else: ?>
                                                    <?php foreach($sem as $s) { ?>
                                                        <li class="page-item">
                                                        <form style="display:inline-block;" method="get" action="<?= base_url('dsn/form_semester');?>">
                                                        <input type='hidden' name="nim" value="<?=$nim?>">
                                                        <input type='hidden' name="semester" value="<?=$s->semester?>">
                                                        <button type="Submit" class="page-link">
                                                        <h3 style="font-weight: normal;"> <?= $s->semester ?> </h3>
                                                        </button>
                                                        </form></li>
                                                    <?php } ?>
                                                <?php endif; ?>
                                        </nav>
                                        <hr>
                                    
                                    </div>
                                </div>
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h2>Form Semester <?= $semester ?></h2>
                                        </div>
                                    </div>
                                    <div style="text-align: center">
                                        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-akademik-tab" data-toggle="pill" href="#pills-akademik" role="tab" aria-controls="pills-akademik" aria-selected="false">Akademik</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-prestasi-tab" data-toggle="pill" href="#pills-prestasi" role="tab" aria-controls="pills-prestasi" aria-selected="false">Prestasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-kegiatan-tab" data-toggle="pill" href="#pills-kegiatan" role="tab" aria-controls="pills-kegiatan" aria-selected="false">Kegiatan Mahasiswa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-magang-tab" data-toggle="pill" href="#pills-magang" role="tab" aria-controls="pills-magang" aria-selected="false">Magang/KP/Kampus Merdeka</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-kompetensi-tab" data-toggle="pill" href="#pills-kompetensi" role="tab" aria-controls="pills-kompetensi" aria-selected="false">Kompetensi Mahasiswa</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-akademik" role="tabpanel" aria-labelledby="pills-akademik-tab">
                                                <div class="card" style="padding-top:10px">
                                                    <div class="card-header">
                                                        <h5>Form Hasil Studi</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form class="needs-validation">
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" name="id_portofolio" value=<?= $id_portofolio?>  >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" name="semester" value=<?= $semester?>  >
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>SKS</label>
                                                                    <input type="number" name="sks" class="form-control" id="validationCustom01" placeholder="SKS" <?php if (empty($akademik->sks)): ?> value="" <?php else: ?> value="<?= $akademik->sks ?>" <?php endif; ?> readonly>
                                                                </div>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>IP Semester</label>
                                                                    <input type="float" name="ips" class="form-control" id="validationCustom02" placeholder="IP Semester" <?php if (empty($akademik->ips)): ?> value="" <?php else: ?> value="<?= $akademik->ips ?>" <?php endif; ?> readonly>
                                                                </div>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>IP Komulatif</label>
                                                                    <input type="float" name="ipk" class="form-control" id="validationCustom02" placeholder="IP Komulatif" <?php if (empty($akademik->ipk)): ?> value="" <?php else: ?> value="<?= $akademik->ipk ?>" <?php endif; ?> readonly>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-row">
                                                            <?php if(empty($akademik->krs)): ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload KRS</label>-<br>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload KRS</label><br>
                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/krs');?>/<?=$akademik->krs?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                                    
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if(empty($akademik->transkrip)): ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload Transkrip</label>-<br>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload Transkrip</label><br>
                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/transkrip');?>/<?=$akademik->transkrip?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                                    
                                                                </div>
                                                            <?php endif; ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> 
                                            </div>

                                            <div class="tab-pane fade" id="pills-prestasi" role="tabpanel" aria-labelledby="pills-prestasi-tab">
                                                <div class="card" style="padding-top:10px">
                                                    <div class="card-header">
                                                        <h5>Form Prestasi</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Prestasi</th>
                                                                                <th>Pelaksanaan</th>
                                                                                <th>Detail</th>
                                                                                <th>File Pendukung</th>
                                                                                <th style="text-align:center">Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tfoot>
                                                                            <tr>
                                                                            
                                                                            </tr>
                                                                        </tfoot>
                                                                        <?php 
                                                                        if (empty($prestasi)):
                                                                            // DO NOTHING
                                                                        else:
                                                                        $no = 1;
                                                                        foreach($prestasi as $p) { 
                                                                            $awal = date('d-m-Y', strtotime($p->tgl_awal));
                                                                            $akhir = date('d-m-Y', strtotime($p->tgl_akhir));?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$p->prestasi?> - <?=$p->nama?></td>
                                                                                <td><?=$awal?> sampai <?=$akhir?></td>
                                                                                <td><b>Penyelenggara:</b><br>
                                                                                    <?= $p->penyelenggara ?><br><br>
                                                                                    <b>Judul Karya:</b><br>
                                                                                    <?= $p->judul ?><br><br>
                                                                                    <b>Dosbing:</b><br>
                                                                                    <?= $p->dosbing ?><br><br>
                                                                                    <b>Tingkat:</b><br>
                                                                                    <?= $p->tingkat ?><br><br>
                                                                                </td>
                                                                                <td>Surat Tugas<br>
                                                                                <?php if(empty($p->surat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/surat');?>/<?=$p->surat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                <br>
                                                                                    Sertifikat<br>
                                                                                <?php if(empty($p->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$p->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                <br>
                                                                                    Foto Dokumentasi<br>
                                                                                <?php if(empty($p->foto)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/foto');?>/<?=$p->foto?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                
                                                                                </td>
                                                                                <td style="text-align:center">
                                                                                <?php if($p->status==1){ ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Verified">
                                                                                        <img src="<?= base_url('assets/ver1.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php }
                                                                                elseif($p->status==2) { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Di-tolak">
                                                                                        <img src="<?= base_url('assets/ver2.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } 
                                                                                else { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Belum di-verifikasi">
                                                                                        <img src="<?= base_url('assets/ver0.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } ?>
                                                                                </td>
                                                                            </tr>
                                                                        
                                                                        </tbody>
                                                                        <?php } 
                                                                        endif;?>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-magang" role="tabpanel" aria-labelledby="pills-magang-tab">
                                                <div class="card" style="padding-top:10px">
                                                    <div class="card-header">
                                                        <h5>Form Kegiatan Akademik</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                    
                                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <!-- <th>Kategori</th> -->
                                                                                <th>Kegiatan</th>
                                                                                <th>Kampus Merdeka</th>
                                                                                <th>Detail</th>
                                                                                <!-- <th>Dosbing</th> -->
                                                                                <!-- <th>Status</th> -->
                                                                                <th>File Pendukung</th>
                                                                                <th style="text-align:center">Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tfoot>
                                                                            <tr>
                                                                            
                                                                            </tr>
                                                                        </tfoot>
                                                                        <?php 
                                                                        if (empty($magang)):
                                                                            // DO NOTHING
                                                                        else:
                                                                        $no = 1;
                                                                        foreach($magang as $m) { 
                                                                            $awal = date('d-m-Y', strtotime($m->tgl_awal));
                                                                            $akhir = date('d-m-Y', strtotime($m->tgl_akhir));?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$m->topik?></td>
                                                                                <?php if($m->merdeka=="Tidak"): echo"<td style='text-align:center'> <i class='fas fa-close' style='color:red'></i>"; 
                                                                                    else: ?> <td><b>Link Kegiatan Dikti :</b><br> <?=$m->merdeka?>  
                                                                                    <?php endif; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <b>Kategori Kegiatan:</b><br>
                                                                                    <?= $m->kategori ?><br><br>
                                                                                    <b>Tempat Kegiatan:</b><br>
                                                                                    <?= $m->nama ?><br><br>
                                                                                    <b>Alamat:</b><br>
                                                                                    <?= $m->alamat ?><br><br>
                                                                                    <b>Dosbing:</b><br>
                                                                                    <?= $m->dosbing ?><br><br>
                                                                                    <b>Posisi/peranan:</b><br>
                                                                                    <?= $m->posisi ?><br><br>
                                                                                </td>
                                                                                <td><?php if (!empty($m->proposal)) { ?>
                                                                                    <b>Pendaftaran</b><br>
                                                                                    Proposal<br>
                                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/pendamping');?>/<?=$m->proposal?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button><hr>
                                                                                    <?php } ?> 
                                                                                    <?php if (!empty($m->bukti)) { ?>
                                                                                    <b>Pelakasanaan</b><br>
                                                                                    Bukti Penerimaan<br>
                                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/pendamping');?>/<?=$m->bukti?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button><hr>
                                                                                    <?php } ?> 
                                                                                    <?php if (!empty($m->laporan)) { ?>
                                                                                    <b>Selesai</b><br>
                                                                                    Laporan Kegiatan<br>
                                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/pendamping');?>/<?=$m->laporan?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                    <?php } ?> 
                                                                                <br>
                                                                                <td style="text-align:center">

                                                                                <?php if($m->status==1){ ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Verified">
                                                                                        <img src="<?= base_url('assets/ver1.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php }
                                                                                elseif($m->status==2) { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Di-tolak">
                                                                                        <img src="<?= base_url('assets/ver2.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } 
                                                                                else { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Belum di-verifikasi">
                                                                                        <img src="<?= base_url('assets/ver0.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } ?>

                                                                                </td>
                                                                            </tr>
                                                                        
                                                                        </tbody>
                                                                        <?php } 
                                                                        endif;?>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-kegiatan" role="tabpanel" aria-labelledby="pills-kegiatan-tab">
                                                <div class="card" style="padding-top:10px">
                                                    <div class="card-header">
                                                        <h5>Form Kegiatan Organisasi</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Klasifikasi</th>
                                                                                <th>Tingkat</th>
                                                                                <th>Detail</th>
                                                                                <th>File Pendukung</th>
                                                                                <th style="text-align:center">Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tfoot>
                                                                            <tr>
                                                                            
                                                                            </tr>
                                                                        </tfoot>
                                                                        <?php 
                                                                        if (empty($aktivitas)):
                                                                            // DO NOTHING
                                                                        else:
                                                                        $no = 1;
                                                                        foreach($aktivitas as $a) { 
                                                                            $awal = date('d-m-Y', strtotime($a->tgl_awal));
                                                                            $akhir = date('d-m-Y', strtotime($a->tgl_akhir));?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$a->klasifikasi?></td>
                                                                                <td><?=$a->tingkat?></td>
                                                                                <td>
                                                                                    <b>Organisasi/Kepanitiaan:</b><br>
                                                                                    <?= $a->nama ?><br><br>
                                                                                    <b>Jabatan/Posisi:</b><br>
                                                                                    <?= $a->jabatan ?><br><br>
                                                                                    <b>Waktu Pelakasanaan:</b><br>
                                                                                    <?= $awal ?> sampai <?= $akhir ?><br><br>
                                                                                </td>
                                                                                <td>Sertifikat/SK<br>
                                                                                <?php if(empty($a->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$a->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                <br>
                                                                                    Foto Dokumentasi<br>
                                                                                <?php if(empty($a->foto)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/foto');?>/<?=$a->foto?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                </td>
                                                                                <td style="text-align:center">
                                                                                <?php if($a->status==1){ ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Verified">
                                                                                        <img src="<?= base_url('assets/ver1.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php }
                                                                                elseif($a->status==2) { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Di-tolak">
                                                                                        <img src="<?= base_url('assets/ver2.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } 
                                                                                else { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Belum di-verifikasi">
                                                                                        <img src="<?= base_url('assets/ver0.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } ?>
                                                                                </td>
                                                                            </tr>
                                                                        
                                                                        </tbody>
                                                                        <?php } 
                                                                        endif;?>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-kompetensi" role="tabpanel" aria-labelledby="pills-kompetensi-tab">
                                                <div class="card" style="padding-top:10px">
                                                    <div class="card-header">
                                                        <h5>Form Kompetensi Mahasiswa</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-kompetensi"><i class="fa fa-plus"></i> Tambah</button>
                                                                    
                                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Nama Kompetensi</th>
                                                                                <th>Detail</th>
                                                                                <th>Sertifikat</th>
                                                                                <th style="text-align:center">Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tfoot>
                                                                            <tr>
                                                                            
                                                                            </tr>
                                                                        </tfoot>
                                                                        <?php 
                                                                        if (empty($kompetensi)):
                                                                            // DO NOTHING
                                                                        else:
                                                                        $no = 1;
                                                                        foreach($kompetensi as $k) { 
                                                                            $tgl = date('d-m-Y', strtotime($k->tgl));?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$k->nama?></td>
                                                                                <td><b>Rumpun Ilmu:</b><br>
                                                                                    <?=$k->rumpun?><br><br>
                                                                                    <b>No. Sertifikat:</b><br>
                                                                                    <?= $k->nomor ?><br><br>
                                                                                    <b>Penerbit Sertifikat:</b><br>
                                                                                    <?= $k->penerbit ?><br><br>
                                                                                    <b>Tanggal Sertifikat:</b><br>
                                                                                    <?= $tgl ?><br><br>
                                                                                </td>
                                                                                <td>
                                                                                <?php if(empty($k->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$k->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                </td>
                                                                                <td style="text-align:center">
                                                                                <?php if($k->status==1){ ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Verified">
                                                                                        <img src="<?= base_url('assets/ver1.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php }
                                                                                elseif($k->status==2) { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Di-tolak">
                                                                                        <img src="<?= base_url('assets/ver2.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php }
                                                                                else { ?>
                                                                                    <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Belum di-verifikasi">
                                                                                        <img src="<?= base_url('assets/ver0.png');?>" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                <?php } ?> 
                                                                                </td>
                                                                            </tr>
                                                                        
                                                                        </tbody>
                                                                        <?php } 
                                                                        endif;?>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
            </section>