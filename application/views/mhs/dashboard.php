<?php function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }?> 
            <section class="statistic">
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach($view as $v){ 
                                    $tgl = tgl_indo($v->date);
                                    $ch = strlen($v->head);
                                    $cp = strlen($v->pengumuman);?>
                    
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header" style="background-color:#4272d7; border-top-right-radius: 10px; border-top-left-radius: 10px;">
                                        <?php echo "<h4 class='name' style='color:white; font-weight:500'>" ?> <?=$v->judul?> <?php "</h4>" ?><br>
                                        <small style="color:antiquewhite">Last updated <?=$tgl?></small>
                                        </div>
                                        <?php if ($ch==$cp): ?>
                                        <div class="card-body" style="overflow:hidden;">
                                            <?=$v->head?>
                                        </div>
                                        <?php else: ?>
                                        <div class="card-body" style="overflow:hidden;">
                                            <?=$v->head?>...
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" data-toggle="modal" data-target="#pengumuman<?=$v->id?>" class="btn btn-primary">Read More</button>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>

                             <!-- modal tambah prestasi -->
                             <?php foreach($view as $v){ ?>
                             <div class="modal fade" id="pengumuman<?=$v->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding-top: 5px; padding-bottom: 0px;">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                    <div class="modal-body" style="overflow:hidden; padding-top: 5px; padding-bottom: 0px;">
                                                                    <?php echo "<h3>" ?> <?=$v->judul?> <?php "</h3>" ?><br>
                                                                    <small class="text-muted">Last updated <?=$tgl?></small><hr>
                                                                        <span style="font-weight: normal; font-size:18px; line-height:1.625"><?=$v->pengumuman?></span> 
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
            </section>
