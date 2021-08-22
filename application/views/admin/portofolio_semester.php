           <div class="col-xl-9">
                        <div class="container-fluid">
                                <!-- Akademik -->
                                    <div class="card">
                                        <div class="card-header" style="background: #4272d7">
                                            <h4 style="color:white; text-align:center">Portofolio Mahasiswa Semester <?= $semester ?></h4>
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
                                                        <form class="needs-validation" method="post" action="<?= base_url('Admin/update_akademik');?>" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                            <input type="hidden" class="form-control" name="nim" value=<?= $nim?>  >
                                                                <input type="hidden" class="form-control" name="id_portofolio" value=<?= $id_portofolio?>  >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" name="semester" value=<?= $semester?>  >
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>SKS</label>
                                                                    <input type="number" name="sks" class="form-control" id="validationCustom01" placeholder="SKS" <?php if (empty($akademik->sks)): ?> value="" <?php else: ?> value="<?= $akademik->sks ?>" <?php endif; ?> required="">
                                                                </div>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>IP Semester</label>
                                                                    <input type="float" name="ips" class="form-control" id="validationCustom02" placeholder="IP Semester" <?php if (empty($akademik->ips)): ?> value="" <?php else: ?> value="<?= $akademik->ips ?>" <?php endif; ?> required="">
                                                                </div>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>IP Komulatif</label>
                                                                    <input type="float" name="ipk" class="form-control" id="validationCustom02" placeholder="IP Komulatif" <?php if (empty($akademik->ipk)): ?> value="" <?php else: ?> value="<?= $akademik->ipk ?>" <?php endif; ?> required="">
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-row">
                                                            <?php if(empty($akademik->krs)): ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload KRS</label><br>
                                                                    <input type="file" accept="application/pdf" name="krs" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload KRS</label><br>
                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/krs');?>/<?=$akademik->krs?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                                    <input type="file" accept="application/pdf" name="krs" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if(empty($akademik->transkrip)): ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload Transkrip</label><br>
                                                                    <input type="file" accept="application/pdf" name="transkrip" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload Transkrip</label><br>
                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/transkrip');?>/<?=$akademik->transkrip?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                                    <input type="file" accept="application/pdf" name="transkrip" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                                </div>
                                                            <?php endif; ?>
                                                            </div>
                                                            <br><button class="btn btn-success" style="text-align: left;" type="submit">Submit</button>
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
                                                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-prestasi"><i class="fa fa-plus"></i> Tambah</button>
                                                                    
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
                                                                                <th style="text-align:center">Action</th>
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
                                                                                <td style="text-align:center">
                                                                                    <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_prestasi');?>">
                                                                                        <input type='hidden' name="id" value="<?= $p->id ?>">
                                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                                        <input type='hidden' name="semester" value="<?= $semester ?>">
                                                                                        <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                                                        <img src="<?= base_url('assets/trash.png');?>" alt="trash" width="30" height="30"/>
                                                                                        </button>
                                                                                    </form>  
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
                                                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-magang"><i class="fa fa-plus"></i> Tambah</button>
                                                                    
                                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Magang / KP</th>
                                                                                <th>Pelaksanaan</th>
                                                                                <th>Topik</th>
                                                                                <th>Dosbing</th>
                                                                                <th>File Pendukung</th>
                                                                                <th style="text-align:center">Action</th>
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
                                                                                <td><?=$m->posisi?> - <?=$m->nama?> - <?=$m->alamat?></td>
                                                                                <td><?=$awal?> sampai <?=$akhir?></td>
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
                                                                                <td style="text-align:center">
                                                                                    <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_magang');?>">
                                                                                        <input type='hidden' name="id" value="<?= $m->id ?>">
                                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                                        <input type='hidden' name="semester" value="<?= $semester ?>">
                                                                                        <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                                                        <img src="<?= base_url('assets/trash.png');?>" alt="trash" width="30" height="30"/>
                                                                                        </button>
                                                                                    </form>  
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
                                                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-kegiatan"><i class="fa fa-plus"></i> Tambah</button>
                                                                    
                                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Organisasi / Kepanitian</th>
                                                                                <th>Jabatan</th>
                                                                                <th>Masa Jabatan</th>
                                                                                <th>File Pendukung</th>
                                                                                <th style="text-align:center">Action</th>
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
                                                                                <td><?=$a->nama?></td>
                                                                                <td><?=$a->jabatan?></td>
                                                                                <td><?=$awal?> sampai <?=$akhir?></td>
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
                                                                                <td style="text-align:center">
                                                                                    <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_aktivitas');?>">
                                                                                        <input type='hidden' name="id" value="<?= $a->id ?>">
                                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                                        <input type='hidden' name="semester" value="<?= $semester ?>">
                                                                                        <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                                                        <img src="<?= base_url('assets/trash.png');?>" alt="trash" width="30" height="30"/>
                                                                                        </button>
                                                                                    </form>  
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

                                                    <!-- modal tambah prestasi -->
                                                    <div class="modal fade tambah-prestasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Prestasi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Admin/insert_prestasi');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        <input class="form-control" type="hidden" name="id_portofolio" value="<?=$id_portofolio?>">
                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                        <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                                        <label>Nama Kompetisi</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="nama" placeholder="Nama Kompetisi" required=""></textarea><br>
                                                                        <label>Penyelenggara</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="penyelenggara" placeholder="Penyelenggara" required=""></textarea><br>
                                                                        <label>Judul Karya</label>
                                                                        <textarea class="form-control" row="3" name="judul" placeholder="Judul Karya"></textarea><br>
                                                                        <label>Tahun</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" name="tahun" placeholder="Tahun" required="">
                                                                            <?php
                                                                            for ($year = (int)date('Y'); 2010 <= $year; $year--): ?>
                                                                                <option value="<?=$year;?>"><?=$year;?></option>
                                                                            <?php endfor; ?>
                                                                        </select><br>
                                                                        <label>Tingkat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" name="tingkat" placeholder="tingkat" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Internasional">Internasional</option>
                                                                            <option value="Nasional">Nasional</option>
                                                                            <option value="Provinsi">Provinsi</option>
                                                                            <option value="Kota">Kota</option>
                                                                            <option value="Universitas">Universitas</option>
                                                                        </select><br>
                                                                        <label>Prestasi</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" name="prestasi" placeholder="prestasi" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Juara 1 / Emas">Juara 1 / Emas</option>
                                                                            <option value="Juara 2 / Perak">Juara 2 / Perak</option>
                                                                            <option value="Juara 3 / Perunggu">uara 3 / Perunggu</option>
                                                                            <option value="Finalis">Finalis</option>
                                                                            <option value="Peserta">Peserta</option>
                                                                        </select><br>
                                                                        <label>Dosen Pembimbing</label>
                                                                        <select class="chosen-select-width" style="font-size: 1rem" name="dosbing" placeholder="dosbing">
                                                                            <option value="">Please Select</option>
                                                                            <?php foreach($dosen as $d){ ?>
                                                                            <option value="<?= $d->nip ?>"><?= $d->nama ?></option>
                                                                            <?php } ?>
                                                                        </select><hr>
                                                                        <label>File Sertifikat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 10mb</label><br><br>
                                                                        <label>Foto Dokumentasi</label><br>
                                                                        <input type="file" accept="image/*" name="foto"><br>
                                                                        <label style="color:red; font-size:12px;">File gambar maks 10mb</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- modal tambah magang -->
                                                    <div class="modal fade tambah-magang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Magang</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Admin/insert_magang');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        <input class="form-control" type="hidden" name="id_portofolio" value="<?=$id_portofolio?>">
                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                        <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                                        <label>Tempat Magang  / KP</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="nama" placeholder="Tempat Magang / KP" required=""></textarea><br>
                                                                        <label>Alamat</label>
                                                                        <textarea class="form-control" row="3" name="alamat" placeholder="Alamat"></textarea><br>
                                                                        <label>Posisi Pekerjaan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="posisi" placeholder="Posisi Pekerjaan" required=""></textarea><br>
                                                                        <label>Topik Magang / KP</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="topik" placeholder="Topik Magang / KP" required=""></textarea><br>
                                                                        <label>Waktu Pelaksanaan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <div class="row" style="text-align: center; padding-left:1rem; padding-right:1rem">
                                                                            <input class="form-control col-5" type="date" name="tgl_awal" required="">
                                                                            <input class="form-control col-2" type="text" style="text-align: center;" value="-" disabled>
                                                                            <input class="form-control col-5" type="date" name="tgl_akhir" required="">
                                                                        </div>
                                                                        <br>
                                                                        <label>Dosen Pembimbing</label>
                                                                        <select class="chosen-select-width" style="font-size: 1rem" name="dosbing" placeholder="dosbing">
                                                                            <option value="">Please Select</option>
                                                                            <?php foreach($dosen as $d){ ?>
                                                                            <option value="<?= $d->nip ?>"><?= $d->nama ?></option>
                                                                            <?php } ?>
                                                                        </select><hr>
                                                                        <label>File Sertifikat</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat"><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 10mb</label><br><br>
                                                                        <label>Foto Dokumentasi</label><br>
                                                                        <input type="file" accept="image/*" name="foto"><br>
                                                                        <label style="color:red; font-size:12px;">File gambar maks 10mb</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- modal tambah kegiatan mahasiswa -->
                                                    <div class="modal fade tambah-kegiatan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Kegiatan Mahasiswa</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Admin/insert_aktivitas');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        <input class="form-control" type="hidden" name="id_portofolio" value="<?=$id_portofolio?>">
                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                        <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                                        <label>Organisasi / Kepanitian</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="nama" placeholder="Organisasi / Kepanitian" required=""></textarea><br>
                                                                        <label>Jabatan / Posisi</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" row="3" name="jabatan" placeholder="Jabatan / Posisi"></textarea><br>
                                                                        <label>Masa Jabatan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <div class="row" style="text-align: center; padding-left:1rem; padding-right:1rem">
                                                                            <input class="form-control col-5" type="date" name="tgl_awal" required="">
                                                                            <input class="form-control col-2" type="text" style="text-align: center;" value="-" disabled>
                                                                            <input class="form-control col-5" type="date" name="tgl_akhir" required="">
                                                                        </div><br>
                                                                        <label>File Sertifikat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 10mb</label><br><br>
                                                                        <label>Foto Dokumentasi</label><br>
                                                                        <input type="file" accept="image/*" name="foto"><br>
                                                                        <label style="color:red; font-size:12px;">File gambar maks 10mb</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
