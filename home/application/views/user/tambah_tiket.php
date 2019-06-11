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

                                <div class="col-sm-4">
                                    <label for="maskapai" class=" form-control-label">Maskapai</label>
                                    <br>
                                    <small class = "form-text text-danger"><?= form_error('maskapai'); ?></small>
                                    <select onchange = "cek_database()" id = "maskapai" name = "maskapai"  class="form-control show-tick" required>
                                       <option value="">-- Select One --</option>
                                       <?php foreach($get_maskapai as $gm): ?>
                                        <?php if ($gm['maskapai'] == $edit_tiket['maskapai']) : ?>
                                        <option value="<?= $gm['maskapai']; ?>" selected><?= $gm['maskapai']; ?> </option>
                                        <?php else : ?>
                                         <option value="<?= $gm['maskapai']; ?>"><?= $gm['maskapai']; ?> </option>
                                        <?php endif; ?>
                                       <?php endforeach; ?>
                                    </select>
                                </div>

                                    <div class="col-sm-4" hidden>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="id_maskapai" class=" form-control-label">ID Maskapai</label>
                                            <input type="text" id = "id_maskapai" name = "id_maskapai" class="form-control">

                                        </div>
                                    </div>
                                </div>
    <script type="text/javascript">
    function cek_database(){
        var maskapai = $("#maskapai").val();
        $.ajax({
            url: 'http://localhost/home/user/ajax',
            data:"maskapai="+maskapai ,
            method:'post',
            success: function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#id_maskapai').val(obj.id_maskapai);

        }

        });
    }
</script>

                                <div class="col-sm-4">
                                    <label for="jenis_penerbangan" class=" form-control-label">Jenis Penerbangan</label><br>
                                    <small class = "form-text text-danger"><?= form_error('jenis_penerbangan'); ?></small>
                                    <select class="form-control show-tick" name = "jenis_penerbangan" required>
                                        <option value="">-- Select One --</option>
                                        <option value="Domestik">Domestik</option>
                                        <option value="International">International</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="nomor_penerbangan" class=" form-control-label">Kode Penerbangan</label><br><small class = "form-text text-danger"><?= form_error('nomor_penerbangan'); ?></small>
                                            <input type="text" name = "nomor_penerbangan" class="form-control" autocomplete="off" value="<?= set_value('nomor_penerbangan'); ?>" placeholder = "JT-692">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tiket_berangkat" class=" form-control-label">Tiket Berangkat</label><br> <small class = "form-text text-danger"><?= form_error('tiket_berangkat'); ?></small>
                                            <input type="text" name = "tiket_berangkat" class="form-control" autocomplete="off" value="<?= set_value('tiket_berangkat'); ?>" placeholder = "Malang">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tiket_tujuan" class=" form-control-label">Tiket Tujuan</label><br>
                                            <small class = "form-text text-danger"><?= form_error('tiket_tujuan'); ?></small>
                                            <input type="text" name = "tiket_tujuan" class="form-control" autocomplete="off" value="<?= set_value('tiket_tujuan'); ?>" placeholder = "Jakarta">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">

                                        <div class="form-line">
                                            <label for="tanggal_berangkat" class=" form-control-label">Tanggal Berangkat </label><br><i class="material-icons ">date_range</i><br><small class = "form-text text-danger"><?= form_error('tanggal_berangkat'); ?></small>
                                            <input type="text" name = "tanggal_berangkat" class=" datepicker form-control" placeholder="Please choose a date..." autocomplete="off" value="<?= set_value('tanggal_berangkat'); ?>">


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tanggal_datang" class=" form-control-label">Tanggal Datang </label><br><i class="material-icons ">date_range</i><br><small class = "form-text text-danger"><?= form_error('tanggal_datang'); ?></small>
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date..." name = "tanggal_datang" autocomplete="off" value="<?= set_value('tanggal_datang'); ?>">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="waktu_keberangkatan" class=" form-control-label">Waktu Keberangkatan </label><br><i class="material-icons ">date_range</i><br><small class = "form-text text-danger"><?= form_error('waktu_keberangkatan'); ?></small>
                                            <input type="text" class="timepicker form-control" placeholder="Please choose a date..." name = "waktu_keberangkatan" autocomplete="off" value="<?= set_value('waktu_keberangkatan'); ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="waktu_datang" class=" form-control-label">Waktu Datang </label><br><i class="material-icons ">date_range</i><br><small class = "form-text text-danger"><?= form_error('waktu_datang'); ?></small>
                                            <input type="text" class="timepicker form-control" placeholder="Please choose a date..." name = "waktu_datang" autocomplete="off" value="<?= set_value('waktu_datang'); ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="harga_tiket" class=" form-control-label">Harga Tiket</label><br><small class = "form-text text-danger"><?= form_error('harga_tiket'); ?></small>
                                            <input type="text" name = "harga_tiket" class="form-control" autocomplete="off" value="<?= set_value('harga_tiket'); ?>" placeholder = "500000">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kelas" class=" form-control-label">Kelas</label>
                                    <br>
                                    <small class = "form-text text-danger"><?= form_error('kelas'); ?></small>
                                    <select class="form-control show-tick" name = "kelas" required>
                                       <option value="">-- Select One --</option>
                                       <option value="First Class">First Class</option>
                                       <option value="Bisnis">Bisnis</option>
                                       <option value="Eksekutif">Eksekutif</option>
                                       <option value="Ekonomi">Ekonomi</option>


                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="stok_tiket" class=" form-control-label">Stok Tiket</label><br><small class = "form-text text-danger"><?= form_error('stok_tiket'); ?></small>
                                            <input type="text" name = "stok_tiket" class="form-control" autocomplete="off" value="<?= set_value('stok_tiket'); ?>" placeholder = "100">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class = "btn btn-primary btn-sm" type = "submit">Tambah Data</button>

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
