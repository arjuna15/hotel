<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url('/')?>">Hotel Hebat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=base_url('/')?>">Fasilitas Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('/Tamu/TipeKamar')?>">Tipe Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('/Tamu/ref')?>">Kode Revarasi Anda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('/Tamu/logout')?>">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>