<?php $this->load->view('master/navresp')?>
<?php $i=0;foreach ($data[0] as $key => $value) {
    if ($i==0) {
        $primary=$key;
    }
    $i++;
}?>
<div class="text-right card">
    <div class="row">
        <div class="form-group col-md-4">
            <form action="" method="POST">
                <label for="">Cari berdasarkan nama tamu</label>
                <input type="text" name="nama_tamu" class="form-control col-9" placeholder="Nama Tamu">

                <button type="submit" class="btn btn-primary col-3">
                    Cari
                </button>   
            </form>
        </div>
    
        <div class="form-group col-md-4">
            <form action="" method="POST">
                <label for="">Cari berdasarkan Tanggal Cek In</label>
                <input type="date" name="tgl_cekin" class="form-control col-9" placeholder="Nama Tamu">

                <button type="submit" class="btn btn-primary col-3">
                    Cari
                </button>   
            </form>
        </div>

        <div class="form-group col-md-4">
            <form action="" method="POST">
                <label for="">Cari berdasarkan Email</label>
                <input type="text" name="email" class="form-control col-9" placeholder="Nama Tamu">

                <button type="submit" class="btn btn-primary col-3">
                    Cari
                </button>   
            </form>
        </div>

<!-- 
        <form action="" method="POST">
            <h5>Cari berdasarkan Tanggal Cekin</h5>
            <div class="row mb-3">
                <div class="col-3">
                    <input type="date"  name="tgl_cekin" class="form-control col-9" placeholder="Tanggal Cekin">
                </div>
            </div>
            <div class="col-3">
                    <button type="submit" class="btn btn-primary col-3">
                        Cari
                    </button>
                </div>
        </form>
        <form action="" method="POST">
            <h5>Cari berdasarkan Email</h5>
            <div class="row mb-3">
                <div class="col-3">
                    <input type="text"  name="email" class="form-control col-9" placeholder="Email">
                </div>
            </div>
            <div class="col-3">
                    <button type="submit" class="btn btn-primary col-3">
                        Cari
                    </button>
                </div>
        </form> -->
    </div>
</div>
<div class="card table-responsive">
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($data[0] as $key => $value): ?>
                    <th scope="col"><?=$key?></th>
                <?php endforeach?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value): ?>
                <?php $i=0;?>
                <tr>
                    <?php foreach ($value as $key2 => $value2): ?>
                        <th scope="col">
                            <?=$value2?>
                        </th>
                    <?php endforeach ?>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>