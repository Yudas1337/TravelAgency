<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<section class="content">
        <div class="container-fluid">
          
           
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $tiket; ?>
                            </h2>
                            
                        </div>
                        <form method = "POST" action = "">
                        <div class="body">

                            <div class="row clearfix">
                                <div class="col-sm-12" hidden>
                                    <div class="form-group form-float">
                                        <div class="form-line" >
                                            <label for="id_tiket" class=" form-control-label">ID Tiket</label>
                                            <input type="text" name = "id_tiket" class="form-control" readonly value = "<?= $edit_tiket['id_tiket']; ?>" id = "id_tiket">

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label for="maskapai" class=" form-control-label">maskapai</label>
                                    <select onchange = "cek_database()" id = "maskapai" name = "maskapai"  class="form-control show-tick" >
                                       <?php foreach($get_maskapai as $gm): ?>
                                        <?php if ($gm['maskapai'] == $edit_tiket['maskapai']) : ?>
                                        <option value="<?= $gm['maskapai']; ?>" selected><?= $gm['maskapai']; ?> </option>
                                        <?php else : ?>
                                         <option value="<?= $gm['maskapai']; ?>"><?= $gm['maskapai']; ?> </option>
                                        <?php endif; ?>
                                       <?php endforeach; ?>
                                    </select>
                                </div>

                                    <div class="col-sm-12" hidden>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="id_maskapai" class=" form-control-label">ID Maskapai</label>
                                            <input type="text" id = "id_maskapai" name = "id_maskapai" class="form-control" readonly value = "<?= $edit_tiket['id_maskapai']; ?>" >

                                        </div>
                                    </div>
                                </div>                          
    <script type="text/javascript">
    function cek_database(){
        var maskapai = $("#maskapai").val();
        var id_tiket = $("#id_tiket").val();
        $.ajax({
            url: 'http://localhost/home/user/ajax/'+id_tiket,
            data:"maskapai="+maskapai ,
            method:'post',
            success: function (data) {
            var json = data,
            obj = JSON.parse(json);
            console.log("200 ok");
            $('#id_maskapai').val(obj.id_maskapai);

        }
            
        });
    }
</script>


                                <div class="col-sm-4">
                                    <label for="jenis_penerbangan" class=" form-control-label">Jenis Penerbangan</label>
                                    <?php $jenis_penerbangan = $edit_tiket['jenis_penerbangan']; ?>
                                    <select class="form-control show-tick" name = "jenis_penerbangan">
                                        <option <?php echo ($jenis_penerbangan == 'Domestik') ? "selected": "" ?>>Domestik</option>
                                         <option <?php echo ($jenis_penerbangan == 'International') ? "selected": "" ?>>International</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="nomor_penerbangan" class=" form-control-label">Nomor Penerbangan</label>
                                            <input type="text" name = "nomor_penerbangan" class="form-control" value = "<?= $edit_tiket['nomor_penerbangan']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('nomor_penerbangan'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tiket_berangkat" class=" form-control-label">Tiket Berangkat</label>
                                            <input type="text" name = "tiket_berangkat" class="form-control"  value = "<?= $edit_tiket['tiket_berangkat']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('tiket_berangkat'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tiket_tujuan" class=" form-control-label">Tiket Tujuan</label>
                                            <input type="text" name = "tiket_tujuan" class="form-control"  value = "<?= $edit_tiket['tiket_tujuan']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('tiket_tujuan'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        
                                        <div class="form-line">
                                            <label for="tanggal_berangkat" class=" form-control-label">Tanggal Berangkat </label><br><i class="material-icons ">date_range</i>
                                            <input type="text" name = "tanggal_berangkat" class=" datepicker form-control" value = "<?= $edit_tiket['tanggal_berangkat']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('tanggal_berangkat'); ?></small>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tanggal_datang" class=" form-control-label">Tanggal Datang </label><br><i class="material-icons ">date_range</i>
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date..." name = "tanggal_datang" value = "<?= $edit_tiket['tanggal_datang']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('tanggal_datang'); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="waktu_keberangkatan" class=" form-control-label">Waktu Keberangkatan </label><br><i class="material-icons ">date_range</i>
                                            <input type="text" class="timepicker form-control" placeholder="Please choose a date..." name = "waktu_keberangkatan" value = "<?= $edit_tiket['waktu_keberangkatan']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('waktu_keberangkatan'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="waktu_datang" class=" form-control-label">Waktu Datang </label><br><i class="material-icons ">date_range</i>
                                            <input type="text" class="timepicker form-control" placeholder="Please choose a date..." name = "waktu_datang" value = "<?= $edit_tiket['waktu_datang']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('waktu_datang'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="harga_tiket" class=" form-control-label">Harga Tiket</label>
                                            <input type="text" name = "harga_tiket" class="form-control" value = "<?= $edit_tiket['harga_tiket']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('harga_tiket'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kelas" class=" form-control-label">Kelas</label>
                                    <?php $kelas = $edit_tiket['kelas']; ?>
                                    <select class="form-control show-tick" name = "kelas">
                                        <option <?php echo ($kelas == 'First Class') ? "selected": "" ?>>First Class</option>
                                         <option <?php echo ($kelas == 'Bisnis') ? "selected": "" ?>>Bisnis</option>
                                         <option <?php echo ($kelas == 'Eksekutif') ? "selected": "" ?>>Eksekutif</option>
                                    <option <?php echo ($kelas == 'Ekonomi') ? "selected": "" ?>>Ekonomi</option>
                                    
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="stok_tiket" class=" form-control-label">Stok Tiket</label>
                                            <input type="text" name = "stok_tiket" class="form-control" value = "<?= $edit_tiket['stok_tiket']; ?>">
                                            <small class = "form-text text-danger"><?= form_error('stok_tiket'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                
                                
                               

                            </div>
                            <button class = "btn btn-primary btn-sm" type = "submit">Edit Data </button>

                        </div>
                        </form>
                    </div>
                
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>


</body>

</html>
                          