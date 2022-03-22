<?php $this->load->view('master/navresp')?>
<div class="container">
    <div class="card mb-3">
        <img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHx8&w=1000&q=80" class="" alt="">
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