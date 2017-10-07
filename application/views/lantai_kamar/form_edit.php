<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Lantai</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('lantai_kamar/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_lantai']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="nama_lantai" class="col-sm-2 control-label">Lantai</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_lantai" value="<?php echo $record['nama_lantai']; ?>">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
</div>
