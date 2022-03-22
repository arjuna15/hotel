<?php $this->load->view('master/navauth')?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3 text-center">
                <img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHx8&w=1000&q=80" alt="" style="max-height:400px;object-fit:cover">
                <div class="card-body">
                    <h5 class="card-title">Hotel Hebat</h5>
                    <p class="card-text">Selamat Datang di Hotel Hebat</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <?php foreach ($fas as $key => $fasi):?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?=$fasi->nama_fasilitas?></h5>
                        <p class="card-text"><?=$fasi->deks?>.</p>
                    </div>
                    <img src="<?=$fasi->img?>" class="card-img-bottom" alt="" style="max-height:200px;object-fit: cover;">
                </div>
            </div>
            <?php endforeach; ?>
    </div>

</div>

<?php $this->load->view('master/footer')?>