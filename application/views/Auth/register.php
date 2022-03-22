<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form method="POST" action="<?= base_url('/Auth/addusers') ?>">
        <input type="text" name="username" placeholder="Masukan Username">
        <input type="text" name="Nama" placeholder="Masukan Nama Lengkap Anda">
        <input type="text" name="Jenis_Kelamin" placeholder="Masukan Jenis Kelamin">
        <input type="date" name="tgllahir" placeholder="Masukan Tanggal Lahir">
        <input type="text" name="nowa" placeholder="Masukan Kontak Whatsapp">
        <input type="password" name="password" placeholder="Masukan Kata Sandi">
        <button type="submit">Register</button>
    </form>
</body>
</html> -->

<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../temp/css/style.css">
  <link rel="stylesheet" href="../temp/css/components.css">
</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
              <form method="POST" action="<?= base_url('/Auth/addusers') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="Nama">Nama Lengkap</label>
                    <input id="Nama" type="text" class="form-control" name="Nama">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    
                    <p class="mt-3">Jenis Kelamin</p>      
                    <select class="form-control" name="Jenis_Kelamin">
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input id="tgllahir" type="date" class="form-control" name="tgllahir">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nowa">Nomor Whatsapp</label>
                    <input id="nowa" type="text" class="form-control" name="nowa">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="text" class="form-control" name="password">
                    <div class="invalid-feedback">
                    </div>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
             <div class="mt-2 text-muted text-center">
              Sudah Punya Akun? <a href="/hotel_hebat/Auth/login">Masuk!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../temp/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="../temp/js/scripts.js"></script>
  <script src="../temp/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../temp/js/page/auth-register.js"></script>


</body></html>
