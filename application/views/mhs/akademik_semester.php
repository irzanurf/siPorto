                                <div class="col-md-18">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Akademik</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="lead m-t-0">Gunakan menu di sebelah kiri untuk memilih semester <br>
                                            Apabila ingin melakukan perubahan, silahkan ubah data yg ingin diubah kemudian tekan tombol <b><i>submit</i></b></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            <!-- [ Main Content ] start -->
                            <!-- Akademik -->
                            <div class="col-md-18">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Form Akademik Kuliah</h5>
                                    </div>
                                    <div class="card-body">
                                        <form class="needs-validation" method="post" action="<?= base_url('Mhs/update_akademik');?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                <input class="form-control" type="hidden" name="id" value="<?=$akademik->id?>">
                                                <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                    <label>SKS</label>
                                                    <input type="number" name="sks" class="form-control" id="validationCustom01" placeholder="SKS" value="<?= $akademik->sks ?>" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>IP Semester</label>
                                                    <input type="float" name="ips" class="form-control" id="validationCustom02" placeholder="IP Semester" value="<?= $akademik->ips ?>" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>IP Komulatif</label>
                                                    <input type="float" name="ipk" class="form-control" id="validationCustom02" placeholder="IP Komulatif" value="<?= $akademik->ipk ?>" required>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                            <?php if(empty($akademik->krs)): ?>
                                                <div class="col-md-4 mb-3">
                                                    <label>Upload KRS</label>
                                                    <input type="file" accept="application/pdf" name="krs" >
                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-md-4 mb-3">
                                                    <label>Upload KRS</label><br>
                                                    <button method="post" onclick=" window.open('<?= base_url('assets/krs');?>/<?=$akademik->krs?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                    <input type="file" accept="application/pdf" name="krs" >
                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                </div>
                                            <?php endif; ?>

                                            <?php if(empty($akademik->transkrip)): ?>
                                                <div class="col-md-4 mb-3">
                                                    <label>Upload Transkrip</label>
                                                    <input type="file" accept="application/pdf" name="transkrip" >
                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-md-4 mb-3">
                                                    <label>Upload Transkrip</label><br>
                                                    <button method="post" onclick=" window.open('<?= base_url('assets/transkrip');?>/<?=$akademik->transkrip?>', '_blank'); return false;" class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>" alt="attach" width="50" height="50"/></button>
                                                    <input type="file" accept="application/pdf" name="transkrip" >
                                                    <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                            <br><button class="btn btn-info" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Prestasi -->
                            <div class="col-md-18">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Form Prestasi</h5>
                                    </div>
                                    <div class="card-body">
                                            <div class="form-row">
                                                <div class="table-responsive">
                                                    <button class="btn  btn-primary" type="button" data-toggle="modal" data-target=".tambah-prestasi"><i class="fa fa-plus"></i> Tambah</button>
                                                    
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align:center">No</th>
                                                                <th>Nama</th>
                                                                <th>Penyelenggara</th>
                                                                <th>Tahun</th>
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
                                                        $no = 1;
                                                        foreach($prestasi as $p) { ?>
                                                        <tbody>
                                                        
                                                            <tr>
                                                                <td style="text-align:center"><?=$no++?></td>
                                                                <td><?=$p->nama?></td>
                                                                <td><?=$p->penyelenggara?></td>
                                                                <td><?=$p->tahun?></td>
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
                                                                    <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Mhs/delete_prestasi');?>">
                                                                        <input type='hidden' name="id" value="<?= $p->id ?>">
                                                                        <input type='hidden' name="semester" value="<?= $semester ?>">
                                                                        <button type="submit" class="btn btn-primary-outline">
                                                                        <img src="<?= base_url('assets/trash.png');?>" alt="trash" width="30" height="30"/>
                                                                        </button>
                                                                    </form>  
                                                                </td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->

                                                    <!-- modal tambah prestasi -->
                                                    <div class="modal fade tambah-prestasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Prestasi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Mhs/insert_prestasi');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        <input class="form-control" type="hidden" name="id" value="<?=$akademik->id?>">
                                                                        <input class="form-control" type="hidden" name="semester" value="<?=$semester?>">
                                                                        <label>Nama</label>
                                                                        <textarea class="form-control" row="3" name="nama" placeholder="Nama" value=""></textarea><br>
                                                                        <label>Penyelenggara</label>
                                                                        <textarea class="form-control" row="3" name="penyelenggara" placeholder="Penyelenggara" value=""></textarea><br>
                                                                        <label>Tahun</label>
                                                                        <select class="form-control" name="tahun" placeholder="Tahun" value="">
                                                                            <?php
                                                                            for ($year = (int)date('Y'); 1900 <= $year; $year--): ?>
                                                                                <option value="<?=$year;?>"><?=$year;?></option>
                                                                            <?php endfor; ?>
                                                                        </select><br>
                                                                        <label>Tingkat</label>
                                                                        <input class="form-control" type="text" name="tingkat" placeholder="Tingkat" value=""><br>
                                                                        <label>File Sertifikat</label><br>
                                                                        <input type="file" accept="application/pdf" name="sertifikat"><br>
                                                                        <label style="color:red; font-size:12px;">.pdf maks 10mb</label><br><br>
                                                                        <label>Foto Dokumentasi</label><br>
                                                                        <input type="file" accept="image/*" name="foto"><br>
                                                                        <label style="color:red; font-size:12px;">File gambar maks 10mb</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>