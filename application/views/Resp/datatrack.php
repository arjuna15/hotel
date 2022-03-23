<?php $this->load->view('master/navresp')?>
<div class="container">
    <div class="card mb-3">
    <img src="<?php echo base_url('/assets/img/hotel.jpg'); ?>" alt="" style="max-height:400px;object-fit:cover">
        <div class="card-body">
            <h5 class="card-title">Cari Data</h5>
            <p class="card-text">
                Masukan Code Booking :
                <form action="<?=base_url('/Resp/Datatrack')?>" method="get">
                <input type="text" name="ref" class="
                form-control">
                <button type="submit" class="btn btn-primary
                col-md-12 mt-2">Cari</button>
            </form>
            </p>
        </div>
    </div>
</div>