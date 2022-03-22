<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Tipe Kamar</title>
  </head>
  <body>
      <?php $this->load->view('master/navtamu')?>
    <h1></h1>

    <div class="container">
        <?php foreach ($data as $key => $kamar): ?>
        <div class="card mb-3">
            <img src="<?=$kamar['Info_kamar']->img_room?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$kamar['Info_kamar']->Nama_room?> - Rp. <?=$kamar['Info_kamar']->
                    harga?>
                    </h5>
                <p class="card-text"> 
                    fasilitas :
                </p>
                <p>
                    <div class="row">
                    <?php if(!empty($kamar['F_kamar'])) :?>
                        <?php foreach ($kamar['F_kamar'] as $key2 => $F): ?>
                            <div class="col-md-3 mb-2">
                            <div class="card">
                                <img src="<?=$F->img?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$F->nama_fasilitas?></h5>
                                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                        
                                    </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif;?>
                        
                    </div>
                </p>
                <a href="<?= base_url('/Tamu/booknow').'?id='.$kamar['Info_kamar']->id ?>"
                 class="btn btn-primary">Booking Sekarang</a>
            </div>
        </div>
        <?php endforeach ?>
 
        <?php ?>
        
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>