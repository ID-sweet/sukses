<div class="container mx-auto">
<div class="card d-inline-block" id="card1">
    <h1>SUKSES MAKMUR</h1>
    <img src="../img/logo.png" class="h-25 w-25">
</div>
<div class="my-3">
<form action="cari" method="post">
    <input type="text" name="keyword" class="cari" placeholder="Nama barang..."><input type="submit" class="btncari" name="submit" value="Cari">
</form>
  </div>
<div class="my-3" id="tbl">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Stok barang</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    <?php foreach($models as $model):?>
      <tr>
        <th><?=$no++;?></th>
        <th><input type="submit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#id<?= $model['kode_barang'];?>" value="<?=$model["nama_barang"];?>">
      <div class="modal fade mt-4" id="id<?= $model['kode_barang'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Detail Barang</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <pre>
              <label>Kode Barang  : <?= $model['kode_barang'];?></label>
              <label>Nama Barang  : <?= $model['nama_barang'];?></label>
              <label>Harga Beli   : Rp.<?= $model['hargabeli_sb'];?>,00</label>
                  </pre>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      </th>
        <th></th>
      </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>

</div>

