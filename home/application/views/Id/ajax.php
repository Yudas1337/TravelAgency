  <?php

  function rupiah($angka){

                    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                    return $hasil_rupiah;

                    }


                    if(count($all_tiket) > 0)
                    {

                      echo 'Items Found : '.count($all_tiket);
                      echo '<br><br>';

                    foreach($all_tiket as $at):

                    ?>
                    <div class="col-sm-4">

                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <div class="popular">
                          <div class="popular_inner">
                          <figure>
                            <img src="<?= base_url('assets/images/').$at['gambar_maskapai']; ?>" class="img-responsive">
                             <div class="over">
                                <div class="v1"><?= $at['maskapai']; ?><br><span><?= $at['kelas']; ?></span></div>

                              </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1"><?= $at['maskapai']; ?></div>
                            <div class="txt2"><?= $at['tiket_berangkat']. ' - ' . $at['tiket_tujuan']; ?></div><br>
                            <div class="txt3"><?= $at['tanggal_berangkat'] ?></div><br>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price"><?= rupiah($at['harga_tiket']);  ?></div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="<?= base_url('Id/detail_tiket/').$at['id_tiket']; ?>" class="btn-default btn1">Details</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      </div>
                    </div>

                  <?php endforeach; }?>
