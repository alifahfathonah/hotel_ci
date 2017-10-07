<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah transaksi</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('transaksi/pilih_kamar','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_kamar']; ?>">
    <div class="box-body">
      <div class="form-group">
        <label for="nama_pelanggan" class="col-sm-2 control-label">Nama Pelanggan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan">
        </div>
      </div>

      <div class="form-group">
        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-6">
          <textarea name="alamat" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="kontak" class="col-sm-2 control-label">No Telpon</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="kontak" data-inputmask='"mask": "9999-9999-9999"' data-mask>
        </div>
      </div>

      <div class="form-group">
        <label for="id_kamar" class="col-sm-2 control-label">Nomor kamar</label>
        <div class="col-sm-6">
          <select class="form-control select2" name="id_kamar" style="width: 100%;">
            <option value="0">Pilih Kamar</option>
            <?php
            $jumlah_desimal ="0";
            $pemisah_desimal =",";
            $pemisah_ribuan =".";
            foreach ($kamar as $k) {
              if ($k->kondisi == "Kosong") {
                echo "
                <option value='$k->id_kamar'";
                echo $record['id_kamar']==$k->id_kamar?'selected':'';
                echo ">($k->no_kamar) ($k->nama_kelas) ($k->tipe_kamar) (Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-)</option>";
              }
            }
            ?>
          </select>
        </div>
      </div>

      <input type="hidden" name="harga" value="<?php echo $record['harga']; ?>">

      <div class="form-group">
        <label for="lama_tinggal" class="col-sm-2 control-label">Lama tinggal</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="lama_tinggal">
        </div>
      </div>

      <div class="form-group">
        <label for="tipe_pembayaran" class="col-sm-2 control-label">Tipe pembayaran</label>
        <div class="col-sm-4">
          <select class="form-control" name="tipe_pembayaran">
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
          </select>
        </div>
      </div>

      <?php
        $check_in = date('Y-m-d H:i:s');
      ?>
      <input type="hidden" name="check_in" value="<?php echo $check_in; ?>">
      <input type="hidden" name="kondisi" value="Terpakai">

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah transaksi</button>
    </div>
  </form>
</div>
</div>
