              
                <!-- Begin Page Content -->
                <div class="col-xl-9">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">Akun Mahasiswa</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-mhs"><i class="fa fa-plus"></i> Tambah</button>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#import"><i class="fa fa-plus"></i> Import</button>
                        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>   
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Angkatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    foreach($mahasiswa as $v) { 
                                        ?>
                                        <tr>
                                            <td><?= $v->nim ?></td>
                                            <td><?= $v->nama ?></td>
                                            <td><?= $v->angkatan ?></td>
                                            <td>

                                                <form style="display:inline-block;" method="get" action="<?= base_url('Admin/passmhs');?>">
                                                <input type='hidden' name="nim" value="<?= $v->nim ?>">
                                                <button type="Submit" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Akun Mahasiswa">
                                                <i class="fas fa-fw fa-user" style="color:white"></i>
                                                </button>
                                                </form>

                                                <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_mhs');?>">
                                                <input type='hidden' name="nim" value="<?= $v->nim ?>">
                                                <button type="Submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Akun">
                                                <i class="fas fa-fw fa-trash" style="color:white"></i>
                                                </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- modal tambah prestasi -->
                                                    <div class="modal fade tambah-mhs" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Mahasiswa</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Admin/insert_mhs');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                    <label>NIM</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                    <input name="nim" class="form-control" value="" required=""><br>
                                                                    <label>Nama</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                    <input name="nama" class="form-control" value="" required=""><br>
                                                                    <label>Jenis Kelamin</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="form-control" style="font-size: 1rem" name="jenis_kelamin" required="">
                                                                            <option value="">Please Select</option>
                                                                            <option value="Laki-laki">Laki-laki</option>
                                                                            <option value="Perempuan">Perempuan</option>
                                                                        </select><hr>
                                                                    <label>Angkatan</label>
                                                                    <select class="form-control" name="angkatan">
                                                                        <?php
                                                                        for ($year = (int)date('Y'); 2010 <= $year; $year--): ?>
                                                                        <option value="<?php echo $year; ?>"><?php echo $year; ?> </option>
                                                                        <?php endfor; ?>
                                                                    </select><br>
                                                                    <label>Dosen Wali</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                        <select class="chosen-select-width form-control" style="font-size: 1rem" name="doswal" required="">
                                                                            <option value=""></option>
                                                                            <?php foreach($dosen as $d){ ?>
                                                                            <option value="<?= $d->nip ?>"><?= $d->nama ?></option>
                                                                            <?php } ?>
                                                                        </select><hr>
                                                                    <label>NIK</label>
                                                                    <input name="nik" class="form-control" value="" ><br>
                                                                    <label>Tempat Lahir</label>
                                                                    <textarea name="tempat_lahir" class="form-control" value=""></textarea><br>
                                                                    <label>Tanggal Lahir</label>
                                                                    <input type="date" name="tgl_lahir" class="form-control" value=""><br>
                                                                    <label>Alamat</label>
                                                                    <textarea name="alamat" class="form-control" value=""></textarea><br>
                                                                    <label>Alamat Orang Tua/Wali</label>
                                                                    <textarea name="alamat_ortu" class="form-control" value=""></textarea><br>
                                                                    <label>Email SSO</label>
                                                                    <input name="sso" class="form-control" value="" ><br>
                                                                    <label>Email Pribadi</label>
                                                                    <input name="email" class="form-control" value="" ><br>
                                                                    <label>No. HP</label>
                                                                    <input type="number" name="no_hp" class="form-control" value="" >        
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" id="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

<!-- Modal Import -->
    <div class="modal fade import" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Import Mahasiswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form role="form" method="post" action="<?= base_url('admin/import');?>" enctype="multipart/form-data">
                <div class="modal-body">
                <h4>Import File CSV</h4>
                <span style="color: red;">Sebelum mengupload file csv, mohon untuk disesuaikan dengan <a href="<?=base_url('assets/template/template.csv')?>">format terlebih dahulu</a> (perhatikan titik, koma dan titik koma dalam template)</span>
                <hr>
                <label>File Csv</label><br>
                <input type="file" accept=".csv" name="file"><br>
                <label style="color:red; font-size:12px;">.csv maks 8mb</label><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" class="btn btn-success">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Loading Modal-->
    <div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-center" style="color: black; text-align:center" id="exampleModalLabel">Sedang meng-import, mohon tunggu!!</h5>
                </div>
                <div class="modal-body"><img id="loading_gif" src="<?= base_url('assets/loading.gif');?>" width="100%"/></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function(){
            $("form").submit(function() {
        // e.preventDefault();
        $('#loading').modal('show');
        $('#import').modal('hide');
        $('.tambah-mhs').modal('hide');
        });
            });
    </script> 