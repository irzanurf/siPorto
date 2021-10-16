<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
   .float{
      background:green;
      display: block;
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      color: white;
      font-size: 30px;
      font-weight: bold;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      text-decoration: none;
      transition: ease all 0.3s;
      position: fixed;
      right: 30px;
      bottom:30px;
    }
.float:hover{background: blue}
</style>
            <section class="statistic" style="padding-top: 10px;">
                        <div class="container-fluid">
                                <!-- Akademik -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Form</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="lead m-t-0">Gunakan menu di sebelah kiri untuk memilih semester <br>
                                            Apabila ingin melakukan perubahan, silahkan ubah data yg ingin diubah kemudian tekan tombol <b><i>submit</i></b></p>
                                            
                                        </div>
                                    </div>
                                    
                        </div>
            </section>
                                        <!-- Floating CV -->
                                        <form method="get" class="float" action="<?= base_url('cv');?>">
                                            <input type='hidden' name="c" value="<?= $enc ?>">
                                            <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top" title="Buat CV Mahasiswa">
                                            <i class="fas fa-file-text" style="font-size: 25px; color: white;"></i>
                                            </button>
                                        </form>