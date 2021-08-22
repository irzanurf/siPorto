           <section class="statistic">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Akademik -->
                                <div class="card" style="width: 100%; margin-left:10px; margin-right:10px">
                                    <div class="card-header">
                                        <h5>Data diri</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                                <div class="col-md-12 mb-9 text-center">
                                                <?php if(empty($diri->profile)): ?>
                                                <img src="<?= base_url('assets/profile.png');?>" alt="profile" width="150" height="160"/><hr>
                                                <?php else : ?>
                                                <img src="<?= base_url('assets/fotoProfile');?>/<?=$diri->profile?>" alt="profile" width="150" height="200"/><hr>
                                                <?php endif; ?>
                                                </div>
                                        </div>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>NIM</label>
                                                    <input class="form-control" value="<?=$diri->nim?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>NIK</label>
                                                    <input class="form-control" value="<?=$diri->nik?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Nama</label>
                                                    <textarea class="form-control" disabled><?=$diri->nama?></textarea>
                                                </div>
                                        </div><br>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>Program Studi</label>
                                                    <input class="form-control" value="Teknik Elektro" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Dosen Wali</label>
                                                    <textarea class="form-control" disabled><?=$diri->doswal?></textarea>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Angkatan</label>
                                                    <input class="form-control" value="<?=$diri->angkatan?>" disabled>
                                                </div>
                                        </div><br>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>Tempat Lahir</label>
                                                    <input class="form-control" value="<?=$diri->tempat_lahir?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Tanggal Lahir</label>
                                                    <?php if($diri->tgl_lahir=='0000-00-00') :
                                                    $tgl_lahir="";
                                                    else:
                                                    $tgl_lahir = date('d-m-Y', strtotime($diri->tgl_lahir));
                                                    endif; ?>
                                                    <input class="form-control" value="<?=$tgl_lahir?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" disabled><?=$diri->alamat?></textarea>
                                                </div>
                                        </div><br>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>Email SSO</label>
                                                    <input class="form-control" value="<?=$diri->sso?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Email Pribadi</label>
                                                    <input class="form-control" value="<?=$diri->email?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>No. HP</label>
                                                    <input class="form-control" value="<?=$diri->no_hp?>" disabled>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
