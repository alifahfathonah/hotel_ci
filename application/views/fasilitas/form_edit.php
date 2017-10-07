<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Fasilitas</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('fasilitas/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_fasilitas']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="fasilitas" class="col-sm-2 control-label">Fasilitas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="fasilitas" value="<?php echo $record['fasilitas']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Keterangan Paket</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" value="<?php echo $record['keterangan']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="harga_fasilitas" class="col-sm-2 control-label">Harga Paket</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga_fasilitas" value="<?php echo $record['harga_fasilitas']; ?>">
          </div>
        </div>

      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
</div>
