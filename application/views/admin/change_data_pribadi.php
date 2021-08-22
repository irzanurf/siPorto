                        <div class="col-xl-9">
                            <div class="row">
                                <!-- Akademik -->
                                <div class="card" style="width: 100%; margin-left:10px; margin-right:10px">
                                    <div class="card-header" style="background:#4272d7">
                                        <h5 style="color:white">Data diri</h5>
                                    </div>
                                    <div class="card-body">
                                    <form class="needs-validation" method="post" action="<?= base_url('Admin/update_diri');?>" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" name="nim" value="<?=$diri->nim?>">
                                        <div class="form-row">
                                                <div class="col-md-12 mb-9 text-center">
                                                <?php if(empty($diri->profile)): ?>
                                                <img src="<?= base_url('assets/profile.png');?>" alt="profile" width="150" height="160"/><hr>
                                                <?php else : ?>
                                                <img src="<?= base_url('assets/fotoProfile');?>/<?=$diri->profile?>" alt="profile" width="150" height="200"/><hr>
                                                <?php endif; ?>
                                                <input type="file" accept="image/*" name="profile" ><br>
                                                <label style="color:red; font-size:12px;">File gambar maks 10mb</label>
                                                </div>
                                        </div><hr>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>NIM</label>
                                                    <input class="form-control" value="<?=$diri->nim?>" disabled>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>NIK</label>
                                                    <input name="nik" class="form-control" value="<?=$diri->nik?>" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Nama</label>
                                                    <input name="nama" class="form-control" value="<?=$diri->nama?>" >
                                                </div>
                                        </div><br>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>Program Studi</label>
                                                    <input class="form-control" name="fakultas" value="Teknik Elektro" disabled>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Dosen Wali</label>
                                                    <textarea class="form-control" disabled><?=$diri->doswal?></textarea>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Angkatan</label>
                                                    <select class="form-control" name="angkatan">
                                                        <?php
                                                        for ($year = (int)date('Y'); 2000 <= $year; $year--): ?>
                                                        <option value="<?php echo $year; ?>"<?php echo ($diri->angkatan==$year) ? "selected='selected'" : "" ?>><?php echo $year; ?> </option>
                                                        <?php endfor; ?>
                                                    </select><br>
                                                </div>
                                        </div><br>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>Tempat Lahir</label>
                                                    <textarea name="tempat_lahir" class="form-control" ><?=$diri->tempat_lahir?></textarea>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" name="tgl_lahir" class="form-control" value="<?=$diri->tgl_lahir?>" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Alamat</label>
                                                    <textarea name="alamat" class="form-control" ><?=$diri->alamat?></textarea>
                                                </div>
                                        </div><br>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label>Email SSO</label>
                                                    <input name="sso" class="form-control" value="<?=$diri->sso?>" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>Email Pribadi</label>
                                                    <input name="email" class="form-control" value="<?=$diri->email?>" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label>No. HP</label>
                                                    <input type="number" name="no_hp" class="form-control" value="<?=$diri->no_hp?>" >
                                                </div>
                                        </div>
                                        <br><button class="btn btn-success" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
