<link href="<?php echo base_url('/public/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Booking Anda</title>
</head>
<body>
    <div class="container">
        <div class="card mb-3">
            <center>
                <h1>
                    Kartu Booking Hotel Hebat
                </h1>
            </center>
            <hr>
                <div class="card-body">
                    <h5 class="card-title">Kartu Booking Anda</h5>
                    <p class="card-text">
                        Kode Booking Anda :
                    </p>
                    <p>
                        <div class="row">
                            <?php $data['book'] = array_reverse($data['book']);
                            foreach ($data['book'] as $key => $item): ?>
                            <div class="col-md-6 mb-2">
                                <div class="card">
                                    <img src="<?=$item->img_room?>" style="width: 150px;" class="card-img-top" alt="<?=$item->img_room?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$item->Nama_room?> x <?=$item->jml_kamar?> Kamar </h5>
                                        <p>Nama Tamu = <?=$item->nama_tamu?></p>
                                        <p>Tanggal Cekin = <?=$item->tgl_cekin?></p>
                                        <p>Tanggal Cekout = <?=$item->tgl_cekout?></p>
                                        <p>payby = <?=$item->PayBay?></p>
                                        <p>
                                            <strong>
                                                CODEBOOKING = <?=$item->RefPB?>
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </p>
                </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>