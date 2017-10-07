<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah kamar</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('kamar/post','class="form-horizontal"');
    ?>
      <div class="box-body">

        <div class="form-group">
          <label for="no_kamar" class="col-sm-2 control-label">Nomor kamar</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="no_kamar" placeholder="Nomor kamar">
          </div>
        </div>

        <div class="form-group">
          <label for="id_lantai" class="col-sm-2 control-label">Lantai</label>
          <div class="col-sm-4">
            <select class="form-control" name="id_lantai">
              <option value="0">Pilih lantai</option>
              <?php
                foreach ($lantai_kamar as $lk) {
                  echo "
                        <option value='$lk->id_lantai'>$lk->nama_lantai</option>";
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="id_kelas" class="col-sm-2 control-label">Kelas kamar</label>
          <div class="col-sm-4">
            <select class="form-control" name="id_kelas">
              <option value="0">Pilih kelas kamar</option>
              <?php
                foreach ($nama_kelas as $nk) {
                  echo "
                        <option value='$nk->id_kelas'>$nk->nama_kelas</option>";
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="id_tipe_kamar" class="col-sm-2 control-label">Tipe kamar</label>
          <div class="col-sm-4">
            <select class="form-control" name="id_tipe_kamar">
              <option value="0">Pilih tipe kamar</option>
              <?php
                foreach ($tipe_kamar as $tk) {
                  echo "
                        <option value='$tk->id_tipe_kamar'>$tk->tipe_kamar</option>";
                }
              ?>
            </select>
          </div>
        </div>

        <!-- <div class="form-group">
          <label for="id_fasilitas" class="col-sm-2 control-label">Fasilitas</label>
          <div class="col-sm-4">
            <select class="form-control" name="id_fasilitas">
              <option value="0">Pilih fasilitas kamar</option>
              <?php
                foreach ($fasilitas as $f) {
                  echo "
                        <option value='$f->id_fasilitas'>$f->fasilitas($f->keterangan)</option>";
                }
              ?>
            </select>
          </div>
        </div> -->

        <div class="form-group">
          <label for="harga" class="col-sm-2 control-label">Harga</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="harga" placeholder="Harga kamar/malam">
          </div>
        </div>

        <input type="hidden" name="kondisi" value="Kosong">

      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah kamar</button>
      </div>
    </form>
  </div>
</div>
