<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah transaksi</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('transaksi/post','class="form-horizontal"');
    ?>
    <div class="box-body">
      <div class="form-group">
        <label for="nama_pelanggan" class="col-sm-2 control-label">Nama Pelanggan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan">
        </div>
      </div>

      <div class="form-group">
        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-4">
          <textarea name="alamat" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="kontak" class="col-sm-2 control-label">No Telpon</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="kontak" data-inputmask='"mask": "9999-9999-9999"' data-mask>
        </div>
      </div>

      <div class="form-group">
        <label for="id_kamar" class="col-sm-2 control-label">Nomor kamar</label>
        <div class="col-sm-4">
          <select class="form-control select2" name="id_kamar" style="width: 100%;">
            <option value="0">Pilih Kamar</option>
            <?php
            $jumlah_desimal ="0";
            $pemisah_desimal =",";
            $pemisah_ribuan =".";
            foreach ($kamar as $k) {
              if ($k->kondisi == "Kosong") {
                echo "
                <option value='$k->id_kamar'>$k->no_kamar ($k->nama_kelas) ($k->tipe_kamar) (Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-)</option>";
              }
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="lama_tinggal" class="col-sm-2 control-label">Lama tinggal</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="lama_tinggal" data-inputmask='"mask": "99"' data-mask>
        </div>
      </div>

      <div class="form-group">
        <label for="id_fasilitas" class="col-sm-2 control-label">Fasilitas</label>
        <div class="col-sm-4">
          <select class="form-control select2" name="id_fasilitas" style="width: 100%;">
            <option value="0">Pilih Fasilitas</option>
            <?php
            $jumlah_desimal ="0";
            $pemisah_desimal =",";
            $pemisah_ribuan =".";
            foreach ($fasilitas as $f) {
                echo "
                <option value='$f->id_fasilitas'>$f->fasilitas ($f->keterangan) (Rp ".number_format($f->harga_fasilitas, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-)</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="jml_orang" class="col-sm-2 control-label">Untuk berapa orang</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="jml_orang" data-inputmask='"mask": "99"' data-mask>
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

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah transaksi</button>
    </div>
  </form>
</div>
</div>
