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
                                                <a class="nav-link" id="pills-magang-tab" data-toggle="pill" href="#pills-magang" role="tab" aria-controls="pills-magang" aria-selected="false">Magang / KP</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-kegiatan-tab" data-toggle="pill" href="#pills-kegiatan" role="tab" aria-controls="pills-kegiatan" aria-selected="false">Kegiatan Mahasiswa</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-akademik" role="tabpanel" aria-labelledby="pills-akademik-tab">
                                                <div class="card" style="padding-top:10px">
                                                    <div class="card-header">
                                                        <h5>Form Akademik Kuliah</h5>
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
                                                                                <th>Penyelenggara</th>
                                                                                <th>Judul Karya</th>
                                                                                <th>Dosbing</th>
                                                                                <th>Tingkat</th>
                                                                                <th>File Pendukung</th>
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
                                                                        foreach($prestasi as $p) { ?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$p->prestasi?> - <?=$p->nama?> - <?=$p->tahun?></td>
                                                                                <td><?=$p->penyelenggara?></td>
                                                                                <td><?=$p->judul?></td>
                                                                                <td><?=$p->dosbing?></td>
                                                                                <td><?=$p->tingkat?></td>
                                                                                <td>Sertifikat<br>
                                                                                <?php if(empty($p->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$p->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                <br>
                                                                                    Foto Dokumentasi<br>
                                                                                <?php if(empty($p->foto)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/foto');?>/<?=$p->foto?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
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
                                                        <h5>Form Magang / KP</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                    
                                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Magang / KP</th>
                                                                                <th>Pelaksanaan</th>
                                                                                <th>Topik</th>
                                                                                <th>Dosbing</th>
                                                                                <th>File Pendukung</th>
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
                                                                        foreach($magang as $m) { ?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$m->posisi?> - <?=$m->nama?> - <?=$m->alamat?></td>
                                                                                <td><?=$m->tgl_awal?> sampai <?=$m->tgl_awal?></td>
                                                                                <td><?=$m->topik?></td>
                                                                                <td><?=$m->dosbing?></td>
                                                                                <td>Sertifikat<br>
                                                                                <?php if(empty($m->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$m->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                <br>
                                                                                    Foto Dokumentasi<br>
                                                                                <?php if(empty($m->foto)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/foto');?>/<?=$m->foto?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
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
                                                        <h5>Form Kegiatan Organisasi / Kepanitian Mahasiswa</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                   <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Organisasi / Kepanitian</th>
                                                                                <th>Jabatan</th>
                                                                                <th>Masa Jabatan</th>
                                                                                <th>File Pendukung</th>
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
                                                                        foreach($aktivitas as $a) { ?>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$a->nama?></td>
                                                                                <td><?=$a->jabatan?></td>
                                                                                <td><?=$a->tgl_awal?> sampai <?=$a->tgl_awal?></td>
                                                                                <td>Sertifikat<br>
                                                                                <?php if(empty($a->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$a->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                <br>
                                                                                    Foto Dokumentasi<br>
                                                                                <?php if(empty($a->foto)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/foto');?>/<?=$a->foto?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
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