<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit kamar</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('kamar/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_kamar']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="no_kamar" class="col-sm-2 control-label">No kamar</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="no_kamar" value="<?php echo $record['no_kamar']; ?>">
          </div>
        </div>

      <div class="form-group">
        <label for="id_lantai" class="col-sm-2 control-label">Lantai</label>
        <div class="col-sm-4">
          <select class="form-control" name="id_lantai">
            <?php
              foreach ($lantai_kamar as $lk) {
                echo "
                      <option value='$lk->id_lantai'";
                      echo $record['id_lantai']==$lk->id_lantai?'selected':'';
                      echo ">$lk->nama_lantai</option>";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="id_kelas" class="col-sm-2 control-label">Kelas kamar</label>
        <div class="col-sm-4">
          <select class="form-control" name="id_kelas">
            <?php
              foreach ($nama_kelas as $nk) {
                echo "
                      <option value='$nk->id_kelas'";
                      echo $record['id_kelas']==$nk->id_kelas?'selected':'';
                      echo ">$nk->nama_kelas</option>";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="id_tipe_kamar" class="col-sm-2 control-label">Tipe kamar</label>
        <div class="col-sm-4">
          <select class="form-control" name="id_tipe_kamar">
            <?php
              foreach ($tipe_kamar as $tk) {
                echo "
                      <option value='$tk->id_tipe_kamar'";
                      echo $record['id_tipe_kamar']==$tk->id_tipe_kamar?'selected':'';
                      echo ">$tk->tipe_kamar</option>";
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
                      <option value='$f->id_fasilitas'";
                      echo $record['id_fasilitas']==$f->id_fasilitas?'selected':'';
                      echo ">$f->fasilitas($f->keterangan)</option>";
              }
            ?>
          </select>
        </div>
      </div> -->

      <div class="form-group">
        <label for="harga" class="col-sm-2 control-label">Harga</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="harga" value="<?php echo $record['harga']; ?>">
        </div>
      </div>

    </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
</div>
