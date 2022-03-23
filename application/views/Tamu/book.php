<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('/public/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Booking Page</title>
  </head>
  <body>
  <?php $this->load->view('master/navtamu')?>

    <div class="container">
        <form method="POST" action="<?=base_url('/Tamu/prosBook')?>" >
          <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <p class="mb-1">tgl_cekin</p>
                     <input class="form-control" type="date" name="tgl_cekin" placeholder="tgl_cekin">
                  </div>
                  <div class="col-md-4">
                    <p class="mb-1">tgl_cekout</p>
                    <input class="form-control" type="date" name="tgl_cekout" placeholder="tgl_cekout">
                  </div>
                  <div class="col-md-4">
                    <p class="mb-1">jml_kamar</p>
                    <input class="form-control" type="number" name="jml_kamar" placeholder="jml_kamar">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <p class="mt-5">nama_pemesan</p>
                <input class="form-control" type="text" name="nama_pemesan" placeholder="nama_pemesan"
                value="<?=$data['user']->Nama;?>" readonly>
                
                <p class="mt-3">email</p>
                <input class="form-control" type="email" name="email" placeholder="email">
                <p class="mt-3">no_hp</p>
                <input class="form-control" type="number" name="no_hp" placeholder="no_hp"
                value="<?=$data['user']->nowa;?>">
                
                <p class="mt-3">nama_tamu</p>
                <input class="form-control" type="text" name="nama_tamu" placeholder="nama_tamu">
                <p hidden class="mt-3">Pilih Kamar</p>      
                <select hidden class="form-select" name="id_kamar">
                  <option value="<?=$_GET['id'];?>"><?=$data['kamar'][0]['Info_kamar']->Nama_room?></option>
                  <?php foreach($data['alltipe'] as $key => $item):?>
                  <option><?= $item->Nama_room?></option>
                  <?php endforeach;?>
                </select class="form-select">

                <p class="mt-3">Paybay</p>      
                <select class="form-control" name="PayBay">
                  <option>DANU</option>
                  <option>GO PI</option>
                  <option>BU SOFI PAY</option>
                </select>
              </div>
          </div>
          <br>
<!-- value="<?=$data['user']->Nama;?>" readonly -->
<!-- value="<?=$data['user']->nowa;?>" readonly -->

          <button type="submit" class="btn btn-warning">Kirim</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url('/public/js/bootstrap.bundle.min.js'); ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>