                <!-- Begin Page Content -->
                <div class="col-xl-9">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                        <a href="<?=base_url('Admin/tambah_pengumuman');?>"><button class='btn btn-success'><i class="fa fa-plus"></i> Tambah</button></a>
                        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tgl</th>
                                            <th>Judul</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    foreach($view as $v) { 
                                    $date = date('d-m-Y', strtotime($v->date));
                                        ?>
                                        <tr>
                                            <td><?= $date ?></td>
                                            <td><?= $v->judul ?></td>
                                            <td>
                                                <form style="display:inline-block;" method="get" action="<?= base_url('Admin/edit_pengumuman');?>">
                                                <input type='hidden' name="id" value="<?= $v->id ?>">
                                                <button type="Submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                <i class="fas fa-edit" style="color:white"></i>
                                                </button>
                                                </form>

                                                <form style="display:inline-block;" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" action="<?= base_url('Admin/delete_pengumuman');?>">
                                                <input type='hidden' name="id" value="<?= $v->id ?>">
                                                <button type="Submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                                                <i class="fas fa-trash" style="color:white"></i>
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
