              
                <!-- Begin Page Content -->
                <div class="col-xl-9">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">List Daftar Data Mahasiswa</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Angkatan</th>
                                            <th>Dosen Wali</th>
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
                                            <td><?= $v->doswal ?></td>
                                            <td>

                                                <form style="display:inline-block;" method="get" action="<?= base_url('Admin/pribadi');?>">
                                                <input type='hidden' name="nim" value="<?= $v->nim ?>">
                                                <button type="Submit" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Data Pribadi">
                                                <i class="fas fa-fw fa-user" style="color:white"></i>
                                                </button>
                                                </form>

                                                <form style="display:inline-block;" method="get" action="<?= base_url('Admin/form_semester');?>">
                                                <input type='hidden' name="nim" value="<?= $v->nim ?>">
                                                <input type='hidden' name="semester" value="1">
                                                <button type="Submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Portofolio Mahasiswa">
                                                <i class="fas fa-fw fa-edit" style="color:white"></i>
                                                </button>
                                                </form>

                                                <form style="display:inline-block;" method="get" target="_blank" action="<?= base_url('cv');?>">
                                                <input type='hidden' name="c" value="<?= $v->enc ?>">
                                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Buat CV Mahasiswa">
                                                <i class="fas fa-fw fa-file-text" style="color: white;"></i>
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