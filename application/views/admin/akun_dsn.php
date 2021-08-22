              
                <!-- Begin Page Content -->
                <div class="col-xl-9">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">Akun Dosen</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".tambah-dsn"><i class="fa fa-plus"></i> Tambah</button>
                        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>   
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    foreach($dosen as $v) { 
                                        ?>
                                        <tr>
                                            <td><?= $v->nip ?></td>
                                            <td><?= $v->nama ?></td>
                                            <td><?= $v->jabatan ?></td>
                                            <td>

                                                <form style="display:inline-block;" method="get" action="<?= base_url('Admin/passdsn');?>">
                                                <input type='hidden' name="nip" value="<?= $v->nip ?>">
                                                <button type="Submit" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Akun Dosen">
                                                <i class="fas fa-fw fa-user" style="color:white"></i>
                                                </button>
                                                </form>

                                                <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_dsn');?>">
                                                <input type='hidden' name="nip" value="<?= $v->nip ?>">
                                                <button type="Submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Akun">
                                                <i class="fas fa-fw fa-trash" style="color:white"></i>
                                                </button>
                                                </form>

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
                                                    <div class="modal fade tambah-dsn" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Mahasiswa</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <form role="form" method="post" action="<?= base_url('Admin/insert_dsn');?>" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                    <label>NIP</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                    <input name="nip" class="form-control" value="" required=""><br>
                                                                    <label>Nama</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                                                    <input name="nama" class="form-control" value="" required=""><br>
                                                                    <label>Jabatan</label>
                                                                    <input name="jabatan" class="form-control" value="" ><br>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>