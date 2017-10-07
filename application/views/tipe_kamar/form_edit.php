<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Tipe Kamar</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('tipe_kamar/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_tipe_kamar']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="tipe_kamar" class="col-sm-2 control-label">Tipe Kamar</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tipe_kamar" value="<?php echo $record['tipe_kamar']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Keteangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" value="<?php echo $record['keterangan']; ?>">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
</div>
