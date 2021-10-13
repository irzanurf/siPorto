<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                        <li class="nav-item col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                <a class="nav-link active" id="pills-akademik-tab" data-toggle="pill" href="#pills-akademik" role="tab" aria-controls="pills-akademik" aria-selected="false">Akademik</a>
                                            </li>
                                            <li class="nav-item col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                <a class="nav-link" id="pills-prestasi-tab" data-toggle="pill" href="#pills-prestasi" role="tab" aria-controls="pills-prestasi" aria-selected="false">Prestasi</a>
                                            </li>
                                            <li class="nav-item col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                <a class="nav-link" id="pills-kegiatan-tab" data-toggle="pill" href="#pills-kegiatan" role="tab" aria-controls="pills-kegiatan" aria-selected="false">Kegiatan Mahasiswa</a>
                                            </li>
                                            <li class="nav-item col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <a class="nav-link" id="pills-magang-tab" data-toggle="pill" href="#pills-magang" role="tab" aria-controls="pills-magang" aria-selected="false">Kampus Merdeka</a>
                                            </li>
                                            <li class="nav-item col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <a class="nav-link" id="pills-kompetensi-tab" data-toggle="pill" href="#pills-kompetensi" role="tab" aria-controls="pills-kompetensi" aria-selected="false">Kompetensi Mahasiswa</a>
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
                                                                    <label style="color:red; font-size:12px;">.pdf maks 1mb</label>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload KRS</label><br>
                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/krs');?>/<?=$akademik->krs?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                                    <input type="file" accept="application/pdf" name="krs" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 1mb</label>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if(empty($akademik->transkrip)): ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload Transkrip</label><br>
                                                                    <input type="file" accept="application/pdf" name="transkrip" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 1mb</label>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="col-md-4 mb-3" style="text-align: left;">
                                                                    <label>Upload Transkrip</label><br>
                                                                    <button method="post" onclick=" window.open('<?= base_url('assets/transkrip');?>/<?=$akademik->transkrip?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                                    <input type="file" accept="application/pdf" name="transkrip" >
                                                                    <label style="color:red; font-size:12px;">.pdf maks 1mb</label>
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
                                                                                <th>Pelaksanaan</th>
                                                                                <th>Detail</th>
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
                                                                        foreach($prestasi as $p) { 
                                                                            $awal = date('d-m-Y', strtotime($p->tgl_awal));
                                                                            $akhir = date('d-m-Y', strtotime($p->tgl_akhir));?>
                                                                            <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                var id<?=$p->id?> = $('#id_prestasi<?=$p->id?>').val();
                                                                                if(id<?=$p->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/checkStatusPrestasi');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$p->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_prestasi<?=$p->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_prestasi<?=$p->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_prestasi<?=$p->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_prestasi<?=$p->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_prestasi<?=$p->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                        </script>    
                                                                        <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                $('#ver_button_prestasi<?=$p->id?>').click(function(){
                                                                                var id<?=$p->id?> = $('#id_prestasi<?=$p->id?>').val();
                                                                                var status<?=$p->id?> = $('#status_prestasi<?=$p->id?>').val();
                                                                                if(id<?=$p->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/updateStatusPrestasi');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$p->id?>, status:status<?=$p->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_prestasi<?=$p->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_prestasi<?=$p->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_prestasi<?=$p->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_prestasi<?=$p->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_prestasi<?=$p->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                                });
                                                                        </script>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <input type="hidden" id="id_prestasi<?=$p->id?>" value="<?=$p->id?>">
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
                                                                                        <button id="ver_button_prestasi<?=$p->id?>" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="">
                                                                                        <input class="form-control" type="hidden" id="status_prestasi<?=$p->id?>" name="status" value="">
                                                                                        <img id="ver_image_prestasi<?=$p->id?>" src="" alt="ver" width="30" height="30"/>
                                                                                        </button>
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
                                                        <h5>Form Kampus Merdeka</h5>
                                                    </div>
                                                    <div class="card-body" style="text-align: left;">
                                                            <div class="form-row">
                                                                <div class="table-responsive">
                                                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-magang"><i class="fa fa-plus"></i> Tambah</button>
                                                                    
                                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                                    <thead>
                                                                            <tr>
                                                                                <th style="text-align:center">No</th>
                                                                                <th>Kegiatan</th>
                                                                                <th>Kampus Merdeka</th>
                                                                                <th>Detail</th>
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
                                                                            <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                var id<?=$m->id?> = $('#id_magang<?=$m->id?>').val();
                                                                                if(id<?=$m->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/checkStatusMagang');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$m->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_magang<?=$m->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_magang<?=$m->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_magang<?=$m->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_magang<?=$m->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_magang<?=$m->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                        </script>    
                                                                        <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                $('#ver_button_magang<?=$m->id?>').click(function(){
                                                                                var id<?=$m->id?> = $('#id_magang<?=$m->id?>').val();
                                                                                var status<?=$m->id?> = $('#status_magang<?=$m->id?>').val();
                                                                                if(id<?=$m->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/updateStatusMagang');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$m->id?>, status:status<?=$m->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_magang<?=$m->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_magang<?=$m->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_magang<?=$m->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_magang<?=$m->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_magang<?=$m->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                                });
                                                                        </script>  
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <input type="hidden" id="id_magang<?=$m->id?>" value="<?=$m->id?>">
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
                                                                                        <button id="ver_button_magang<?=$m->id?>" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="">
                                                                                        <input class="form-control" type="hidden" id="status_magang<?=$m->id?>" name="status" value="">
                                                                                        <img id="ver_image_magang<?=$m->id?>" src="" alt="ver" width="30" height="30"/>
                                                                                        </button>
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
                                                                                <th>Klasifikasi</th>
                                                                                <th>Tingkat</th>
                                                                                <th>Detail</th>
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
                                                                        <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                var id<?=$a->id?> = $('#id_aktivitas<?=$a->id?>').val();
                                                                                if(id<?=$a->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/checkStatusAktivitas');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$a->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_aktivitas<?=$a->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_aktivitas<?=$a->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_aktivitas<?=$a->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_aktivitas<?=$a->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_aktivitas<?=$a->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                        </script>    
                                                                        <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                $('#ver_button_aktivitas<?=$a->id?>').click(function(){
                                                                                var id<?=$a->id?> = $('#id_aktivitas<?=$a->id?>').val();
                                                                                var status<?=$a->id?> = $('#status_aktivitas<?=$a->id?>').val();
                                                                                if(id<?=$a->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/updateStatusAktivitas');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$a->id?>, status:status<?=$a->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_aktivitas<?=$a->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_aktivitas<?=$a->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_aktivitas<?=$a->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_aktivitas<?=$a->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_aktivitas<?=$a->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                                });
                                                                        </script>    
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <input type="hidden" id="id_aktivitas<?=$a->id?>" value="<?=$a->id?>">
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
                                                                                        <button id="ver_button_aktivitas<?=$a->id?>" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="">
                                                                                        <input class="form-control" type="hidden" id="status_aktivitas<?=$a->id?>" name="status" value="">
                                                                                        <img id="ver_image_aktivitas<?=$a->id?>" src="" alt="ver" width="30" height="30"/>
                                                                                        </button>
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
                                                                                <th style="text-align:center">Action</th>
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
                                                                        <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                var id<?=$k->id?> = $('#id_kompetensi<?=$k->id?>').val();
                                                                                if(id<?=$k->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/checkStatusKompetensi');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$k->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_kompetensi<?=$k->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_kompetensi<?=$k->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_kompetensi<?=$k->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_kompetensi<?=$k->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_kompetensi<?=$k->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                        </script>    
                                                                        <script type="text/javascript"> 
                                                                            $(document).ready(function(){
                                                                                $('#ver_button_kompetensi<?=$k->id?>').click(function(){
                                                                                var id<?=$k->id?> = $('#id_kompetensi<?=$k->id?>').val();
                                                                                var status<?=$k->id?> = $('#status_kompetensi<?=$k->id?>').val();
                                                                                if(id<?=$k->id?> != ''){
                                                                                    $.ajax({
                                                                                        url:"<?= base_url('Admin/updateStatusKompetensi');?>",
                                                                                        method:"POST",
                                                                                        data:{id:id<?=$k->id?>, status:status<?=$k->id?>},
                                                                                        dataType: 'json',
                                                                                        success:function(data){
                                                                                            $('#status_kompetensi<?=$k->id?>').val(data.status);
                                                                                            if (data.status==1){
                                                                                                $("#ver_image_kompetensi<?=$k->id?>").attr("src","<?= base_url('assets/ver1.svg');?>");
                                                                                                $("#ver_button_kompetensi<?=$k->id?>").tooltip().attr('data-original-title', "Verified");
                                                                                            }
                                                                                            else{
                                                                                                $("#ver_image_kompetensi<?=$k->id?>").attr("src","<?= base_url('assets/ver0.svg');?>");
                                                                                                $("#ver_button_kompetensi<?=$k->id?>").tooltip().attr('data-original-title', "Belum ter-verifikasi");
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                }
                                                                                });
                                                                                });
                                                                        </script>
                                                                        <tbody>
                                                                        
                                                                            <tr>
                                                                                <input type="hidden" id="id_kompetensi<?=$k->id?>" value="<?=$k->id?>">
                                                                                <td style="text-align:center"><?=$no++?></td>
                                                                                <td><?=$k->nama?></td>
                                                                                <td><b>Rumpun Ilmu:</b><br>
                                                                                    <?=$k->rumpun?><br><br>
                                                                                    <b>No. Sertifikat:</b><br>
                                                                                    <?= $k->nomor ?><br><br>
                                                                                    <b>Penerbit Sertifikat:</b><br>
                                                                                    <?= $k->penerbit ?><br><br>
                                                                                    <b>Tanggal Sertifikat:</b><br>
                                                                                    <?= $k->tgl ?><br><br>
                                                                                </td>
                                                                                <td>
                                                                                <?php if(empty($k->sertifikat)): ?> -
                                                                                <?php else : ?> <button method="post" onclick=" window.open('<?= base_url('assets/sertifikat');?>/<?=$k->sertifikat?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="30" height="30"/></button>
                                                                                <?php endif; ?>
                                                                                </td>
                                                                                <td style="text-align:center">
                                                                                        <button id="ver_button_kompetensi<?=$k->id?>" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="">
                                                                                        <input class="form-control" type="hidden" id="status_kompetensi<?=$k->id?>" name="status" value="">
                                                                                        <img id="ver_image_kompetensi<?=$k->id?>" src="" alt="ver" width="30" height="30"/>
                                                                                        </button>
                                                                                    <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_kompetensi');?>">
                                                                                        <input type='hidden' name="id" value="<?= $k->id ?>">
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
                                                    <script>
                                                        var otherPenyelenggara;
                                                        var penyelenggara;
                                                        function checkPenyelenggara(select) {
                                                        penyelenggara =  document.getElementById('penyelenggara');
                                                        otherInput = document.getElementById('otherPenyelenggara');
                                                        if (select.options[select.selectedIndex].value == "Other") {
                                                            otherInput.style.display = 'block';
                                                            otherInput.setAttribute("name", "penyelenggara");
                                                            otherInput.setAttribute("required","");
                                                            penyelenggara.setAttribute("name", "");
                                                            penyelenggara.removeAttribute("required");
                                                        }
                                                        else {
                                                            otherInput.style.display = 'none';
                                                            otherInput.setAttribute("name", "");
                                                            otherInput.removeAttribute("required");
                                                            penyelenggara.setAttribute("name", "penyelenggara");
                                                            penyelenggara.setAttribute("required","");
                                                        }
                                                        }
                                                    </script>
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
                                                                        <select onchange="checkPenyelenggara(this)" class="form-control" id='penyelenggara' name="penyelenggara" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Belmawa">Belmawa</option>
                                                                            <option value="Other">Yang lain...</option>
                                                                        </select>
                                                                        <input class="form-control" name='' id='otherPenyelenggara' placeholder="Isi di sini" style="display: none"/><br>
                                                                        <label>Judul Karya</label>
                                                                        <textarea class="form-control" row="3" name="judul" placeholder="Judul Karya"></textarea><br>
                                                                        <label>Waktu Pelaksanaan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <div class="row" style="text-align: center; padding-left:1rem; padding-right:1rem">
                                                                            <input class="form-control col-5" type="date" name="tgl_awal" required="">
                                                                            <input class="form-control col-2" type="text" style="text-align: center;" value="-" disabled>
                                                                            <input class="form-control col-5" type="date" name="tgl_akhir" required="">
                                                                        </div>
                                                                        <br>
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
                                                                        <select class="form-control" onchange="checkPrestasi(this)" name="prestasi" id="prestasi" placeholder="prestasi" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Gold">Gold</option>
                                                                            <option value="Silver">Silver</option>
                                                                            <option value="Bronze">Bronze</option>
                                                                            <option value="Juara 1">Juara 1</option>
                                                                            <option value="Juara 1">Juara 2</option>
                                                                            <option value="Juara 3">Juara 3</option>
                                                                            <option value="Honorable Mention">Honorable Mention</option>
                                                                            <option value="Finalis">Finalis</option>
                                                                            <option value="Peserta">Peserta</option>
                                                                            <option value="Other">Yang lain...</option>
                                                                        </select>
                                                                        <input class="form-control" name='' id='otherPrestasi' placeholder="Isi di sini" style="display: none"/><br>
                                                                        <label>Dosen Pembimbing</label>
                                                                        <select class="chosen-select-width" style="font-size: 1rem" name="dosbing" placeholder="dosbing">
                                                                            <option value="">Please Select</option>
                                                                            <?php foreach($dosen as $d){ ?>
                                                                            <option value="<?= $d->nip ?>"><?= $d->nama ?></option>
                                                                            <?php } ?>
                                                                        </select><hr>
                                                                        <label>Surat Tugas Dekan/Rektor</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input type="file" accept="application/pdf" name="surat" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 1mb</label><br><br>
                                                                        <label>File Sertifikat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 1mb</label><br><br>
                                                                        <label>Foto Dokumentasi</label><br>
                                                                        <input type="file" accept="image/*" name="foto"><br>
                                                                        <label style="color:red; font-size:12px;">File gambar maks 1mb</label>
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
                                                    <script>
                                                        function checkMagang(select) {
                                                        var kategori =  document.getElementById('kategori');
                                                        var otherInput = document.getElementById('otherMagang');
                                                        if (select.options[select.selectedIndex].value == "Other") {
                                                            otherInput.style.display = 'block';
                                                            otherInput.setAttribute("name", "kategori");
                                                            otherInput.setAttribute("required","");
                                                            kategori.setAttribute("name", "");
                                                            kategori.removeAttribute("required");
                                                        }
                                                        else {
                                                            otherInput.style.display = 'none';
                                                            otherInput.setAttribute("name", "");
                                                            otherInput.removeAttribute("required");
                                                            kategori.setAttribute("name", "kategori");
                                                            kategori.setAttribute("required","");
                                                        }
                                                        }
                                                    </script>
                                                    <script>
                                                        function checkLink(select) {
                                                        var merdeka =  document.getElementById('merdeka');
                                                        var otherLink = document.getElementById('otherLink');
                                                        if (select.options[select.selectedIndex].value == "Ya") {
                                                            otherLink.style.display = 'block';
                                                            otherLink.setAttribute("name", "merdeka");
                                                            otherLink.setAttribute("required","");
                                                            merdeka.setAttribute("name", "");
                                                            merdeka.removeAttribute("required");
                                                        }
                                                        else {
                                                            otherLink.style.display = 'none';
                                                            otherLink.setAttribute("name", "");
                                                            otherLink.removeAttribute("required");
                                                            merdeka.setAttribute("name", "merdeka");
                                                            merdeka.setAttribute("required","");
                                                        }
                                                        }
                                                    </script>
                                                    <script>
                                                        function checkFile(select) {
                                                        var file =  document.getElementById('file');
                                                        var input_file =  document.getElementById('input_file');
                                                        if (select.options[select.selectedIndex].value == "Pelaksanaan") {
                                                            file.innerHTML="Bukti Penerimaan";
                                                            input_file.setAttribute("name", "bukti");
                                                        }
                                                        else if (select.options[select.selectedIndex].value == "Selesai") {
                                                            file.innerHTML="Laporan Kegiatan";
                                                            input_file.setAttribute("name", "laporan");
                                                        }
                                                        else { 
                                                            file.innerHTML="Proposal";
                                                            input_file.setAttribute("name", "proposal");
                                                        }
                                                        }
                                                    </script>
                                                    <div class="modal fade tambah-magang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Kampus Merdeka</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" autocomplete="off" method="post" action="<?= base_url('Admin/insert_magang');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        <input id="id" class="form-control" type="hidden" name="id">
                                                                        <input class="form-control" type="hidden" name="id_portofolio" value="<?=$id_portofolio?>">
                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                        <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                                        <label>Judul Kegiatan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <input id="topik" class="form-control"d list="list-topik" name="topik" placeholder="Judul Kegiatan" required="">
                                                                        <datalist id="list-topik">
                                                                            <?php foreach($topik as $t){ ?>
                                                                            <option value="<?= $t ?>">
                                                                            <?php } ?>
                                                                        </datalist><br>
                                                                        <div id="d_kategori">
                                                                            <label>Kategori Kegiatan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                            <select class="form-control" onchange="checkMagang(this)" id="kategori" name="kategori" required="">
                                                                                <option value="">Please Select</option>
                                                                                <option value="Magang">Magang</option>
                                                                                <option value="Kampus Mengajar">Kampus Mengajar</option>
                                                                                <option value="Studi Independen">Studi Independen</option>
                                                                                <option value="Pertukaran Mahasiswa">Pertukaran Mahasiswa</option>
                                                                                <option value="Membangun Desa">Membangun Desa</option>
                                                                                <option value="Kemanusiaan">Kemanusiaan</option>
                                                                                <option value="Other">Yang lain...</option>
                                                                            </select>
                                                                            <input class="form-control" name='' id='otherMagang' placeholder="Isi di sini" style="display: none"/><br>
                                                                        </div>
                                                                        <div id="d_merdeka">
                                                                        <label>Kampus Merdeka</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                            <select class="form-control" onchange="checkLink(this)" name="merdeka" id="merdeka" required="">
                                                                                <option value="Tidak">Tidak</option>
                                                                                <option value="Ya">Ya</option>
                                                                            </select>
                                                                            <input class="form-control" name='' id='otherLink' placeholder="Link Kegiatan Dikti" style="display: none"/><br>
                                                                        </div>
                                                                        <div id="d_nama">
                                                                            <label>Tempat Kegiatan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                            <textarea class="form-control" row="3" name="nama" id="nama" placeholder="Tempat Kegiatan" required=""></textarea><br>
                                                                        </div>
                                                                        <div id="d_alamat">
                                                                            <label>Alamat</label>
                                                                            <textarea class="form-control" row="3" name="alamat" id="alamat" placeholder="Alamat"></textarea><br>
                                                                        </div>
                                                                        <div id="d_posisi">
                                                                            <label>Posisi / Peranan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                            <textarea class="form-control" row="3" name="posisi" id="posisi" placeholder="Posisi / Peranan" required=""></textarea><br>
                                                                        </div>
                                                                        <div id="d_tgl">
                                                                            <label>Waktu Pelaksanaan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                            <div class="row" style="text-align: center; padding-left:1rem; padding-right:1rem">
                                                                                <input class="form-control col-5" type="date" id="tgl_awal" name="tgl_awal" required="">
                                                                                <input class="form-control col-2" type="text" style="text-align: center;" value="-" disabled>
                                                                                <input class="form-control col-5" type="date" id="tgl_akhir" name="tgl_akhir" required="">
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        <div id="d_dosbing">
                                                                            <label>Dosen Pembimbing</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                            <select class="chosen-select-width" id="dosbing" style="font-size: 1rem" name="dosbing" placeholder="dosbing" required="">
                                                                                <option value="">Please Select</option>
                                                                                <?php foreach($dosen as $d){ ?>
                                                                                <option value="<?= $d->nip ?>"><?= $d->nama ?></option>
                                                                                <?php } ?>
                                                                            </select><hr>
                                                                        </div>
                                                                        <label>Status</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" onchange="checkFile(this)" id="status" name="status" required="">
                                                                            <option value="Pendaftaran">Pendaftaran</option>
                                                                            <option value="Pelaksanaan">Pelaksanaan</option>
                                                                            <option value="Selesai">Selesai</option>
                                                                        </select><br>
                                                                        <label id="file">Proposal</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input id="input_file" type="file" accept="application/pdf" name="proposal" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 1mb</label><br><br>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

    <script type="text/javascript"> 
        $(document).ready(function(){
            $('#topik').change(function(){
            var topik = $('#topik').val();
            if(topik != ''){
                $.ajax({
                    url:"<?= base_url('Admin/checkTopik');?>",
                    method:"GET",
                    data:{topik:topik, username:"<?=$nim?>"},
                    dataType: 'json',
                    success:function(data){
                        if (data.cek=="exist"){
                            var id = data.id;
                            $('#id').val(id);
                            $("#d_kategori").hide();
                            $("#kategori").prop("required", false);
                            $("#d_merdeka").hide();
                            $("#merdeka").prop("required", false);
                            $("#d_alamat").hide();
                            $("#d_nama").hide();
                            $("#nama").prop("required", false);
                            $("#d_posisi").hide();
                            $("#posisi").prop("required", false);
                            $("#d_tgl").hide();
                            $("#tgl_awal").prop("required", false);
                            $("#tgl_akhir").prop("required", false);
                            $("#d_dosbing").hide();
                            $("#dosbing").prop("required", false);
                        }
                        else{
                            var id = data.id;
                            $('#id').val(id);
                            $("#d_kategori").show();
                            $("#d_merdeka").show();
                            $("#d_alamat").show();
                            $("#d_nama").show();
                            $("#d_posisi").show();
                            $("#d_tgl").show();
                            $("#d_dosbing").show();
                        }
                    }
                });
            }
            });
            });
    </script>  

                                                    <!-- modal tambah kegiatan mahasiswa -->
                                                    <script>
                                                        function checkKlasifikasi(select) {
                                                        var nama = document.getElementById('l_nama');
                                                        var jabatan = document.getElementById('jabatan');
                                                        var masa = document.getElementById('masa');
                                                        if (select.options[select.selectedIndex].value == "Kepanitian") {
                                                            nama.innerHTML="Nama Kegiatan";
                                                            jabatan.innerHTML="Posisi";
                                                            masa.innerHTML="Waktu Kegiatan";
                                                            document.getElementById('pnama').setAttribute("placeholder","Nama Kegiatan");
                                                            document.getElementById('pjabatan').setAttribute("placeholder","Posisi");
                                                        }
                                                        else {
                                                            nama.innerHTML="Nama Organisasi";
                                                            jabatan.innerHTML="Jabatan";
                                                            masa.innerHTML="Masa Jabatan";
                                                            document.getElementById('pnama').setAttribute("placeholder","Nama Organisasi");
                                                            document.getElementById('pjabatan').setAttribute("placeholder","Jabatan");
                                                        }
                                                        }
                                                    </script>
                                                    <script>
                                                        var otherKegiatan;
                                                        var kegiatan;
                                                        function checkTingkat(select) {
                                                        kegiatan =  document.getElementById('tingkat');
                                                        otherInput = document.getElementById('otherKegiatan');
                                                        if (select.options[select.selectedIndex].value == "Other") {
                                                            otherInput.style.display = 'block';
                                                            otherInput.setAttribute("name", "tingkat");
                                                            otherInput.setAttribute("required","");
                                                            kegiatan.setAttribute("name", "");
                                                            kegiatan.removeAttribute("required");
                                                        }
                                                        else {
                                                            otherInput.style.display = 'none';
                                                            otherInput.setAttribute("name", "");
                                                            otherInput.removeAttribute("required");
                                                            kegiatan.setAttribute("name", "tingkat");
                                                            kegiatan.setAttribute("required","");
                                                        }
                                                        }
                                                    </script>
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
                                                                        <label>Klasifikasi</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" onchange="checkKlasifikasi(this)" name="klasifikasi" required="">
                                                                            <option value="Kepengurusan">Kepengurusan</option>
                                                                            <option value="Kepanitian">Kepanitian</option>
                                                                        </select><br>
                                                                        <label>Tingkat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" name="tingkat" onchange="checkTingkat(this)" id="tingkat" placeholder="tingkat" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Internasional">Internasional</option>
                                                                            <option value="Nasional">Nasional</option>
                                                                            <option value="Universitas">Universitas</option>
                                                                            <option value="Fakultas">Fakultas</option>
                                                                            <option value="Departemen">Departemen</option>
                                                                            <option value="Other">Yang lain...</option>
                                                                        </select>
                                                                        <input class="form-control" name='' id='otherKegiatan' placeholder="Isi di sini" style="display: none"/><br>
                                                                        <label id="l_nama">Nama Organisasi</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <textarea class="form-control" id="pnama" placeholder="Nama Organisasi" row="3" name="nama"  required=""></textarea><br>
                                                                        <label id="jabatan">Jabatan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" name="jabatan" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Ketua">Ketua</option>
                                                                            <option value="Wakil Ketua">Wakil Ketua</option>
                                                                            <option value="Sekretaris">Sekretaris</option>
                                                                            <option value="Anggota">Anggota</option>
                                                                        </select><br>
                                                                        <label id="masa">Masa Jabatan</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <div class="row" style="text-align: center; padding-left:1rem; padding-right:1rem">
                                                                            <input class="form-control col-5" type="date" name="tgl_awal" required="">
                                                                            <input class="form-control col-2" type="text" style="text-align: center;" value="-" disabled>
                                                                            <input class="form-control col-5" type="date" name="tgl_akhir" required="">
                                                                        </div><br>
                                                                        <label>File Sertifikat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 1mb</label><br><br>
                                                                        <label>Foto Dokumentasi</label><br>
                                                                        <input type="file" accept="image/*" name="foto"><br>
                                                                        <label style="color:red; font-size:12px;">File gambar maks 1mb</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <!-- modal tambah kompetensi mahasiawa -->
                                                     <div class="modal fade tambah-kompetensi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Kompetensi Mahasiswa</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Admin/insert_kompetensi');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        <input class="form-control" type="hidden" name="id_portofolio" value="<?=$id_portofolio?>">
                                                                        <input class="form-control" type="hidden" name="nim" value="<?=$nim?>">
                                                                        <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                                        <label>Nama Kompetensi</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <input class="form-control" name='nama' placeholder="Nama Kompetensi" required=""/><br>
                                                                        <label>Rumpun Ilmu</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <input class="form-control" name='rumpun' placeholder="Rumpun Ilmu" required=""/><br>
                                                                        <label>Nomor Sertifikat</label>
                                                                        <input class="form-control" name='nomor' placeholder="Nomor Sertifikat" /><br>
                                                                        <label>Penerbit Sertifikat</label>
                                                                        <input class="form-control" name='penerbit' placeholder="Penerbit Sertifikat" /><br>
                                                                        <label>Tanggal Sertifikat</label>
                                                                        <input type="date" class="form-control" name='tgl' placeholder="Tanggal Sertifikat" /><br>
                                                                        <label>File Sertifikat</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat" required=""><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 1mb</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
