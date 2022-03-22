<?php $this->load->view('master/navresp')?>
<div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">List Booking</h5>
                <p class="card-text"> 
                    Kode Booking Anda :
                </p>
                <p>
                    <div class="class-row">
                        <?php $data['book'] = array_reverse($data['book']);
                            foreach($data['book'] as $key =>$item):?>
                        <div class="col-md-12 mb-2">
                            <div class="card">
                                <img src="<?=$item->img_room?>"
                                class="card-img-top" alt="<?=$item->img_room?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$item->Nama_room?> x <?=$item->jml_kamar?> Kamar</h5>
                                    <p>Nama Tamu = <?=$item->nama_tamu?></p>
                                    <p>tgl cekin = <?=$item->tgl_cekin?></p>
                                    <p>tgl cekout = <?=$item->tgl_cekout?></p>
                                    <p>Total Harga = Rp.<?=$item->Harga?></p>
                                    <p>Payby = <?=$item->PayBay?></p>
                                    <p>Pembayaran = <?php if($item->PayEND==0)
                                    {$pesan='belum di Bayar';}
                                    else{$pesan='sudah di Bayar';}
                                    echo $pesan;
                                    ?>

                                    </p>
                                    <p>
                                        <strong>
                                            CODEBooking = <?=$item->RefPB?>
                                        </strong>
                                    </p>
                                    <?php if ($item->PayEND==0):?>
                                        <a href="<?=base_url('/Resp/payed?id=').$item->id_pesanan.'&f=PayEND&v=1'?>" class="btn btn-warning">Bayar</a>
                                    <?php else:?>
                                        <?php if (date('Y-m-d')>=$item->tgl_cekin&&date('Y-m-d')<=$item->tgl_cekout) :?>
                                            <?php if ($item->Status_Kamar=="Cekin"): ?>
                                            <p class="text-primary">Telah Melakukan Cekin, Cekout Pada <?=$item->tgl_cekout?>
                                            </p>
                                            <?php else:?>
                                                <a href="<?=base_url('/Resp/payed?id=').$item->id_pesanan.'&f=Status_Kamar&v=Cekin'?>" class="btn btn-primary">Cek In</a>
                                            <?php endif ?>
                                            <?php elseif(date('Y-m-d')==$item->tgl_cekout):?>
                                                <a href="<?base_url('/Resp/payed?id=').$item->id_pesanan.'&f=Status_Kamar&v=CekOUT'?>">Cek Out</a>
                                            <?php elseif(date('Y-m-d')>$item->tgl_cekout):?>
                                                <p class="text-danger">Tidak Terlambat Cek Out</p>
                                        <?php endif;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </p>
                <hr>
                <p class="card-text">
                    Masukan Code Booking :
                    <form action="<?=base_url('/Resp/Datatrack')?>" 
                    method="get">
                    <input type="text" name="ref" class="form-control">
                    <button type="submit" class="btn btn-primary col-md-12 mt-2">Cari</button>
                </form>
                </p>
                <!-- <a href="<?= base_url('/Tamu/detailTipe').'?id='.$kamar['Info_kamar']->id ?>"
                 class="btn btn-primary">Lihat Detail</a> -->
            </div>
        </div>
 
        <?php ?>
        
    </div>