<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit jenis ruangan</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('jenis_ruangan/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_jenis_ruangan']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="jenis_ruangan" class="col-sm-2 control-label">Jenis ruangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_ruangan" value="<?php echo $record['jenis_ruangan']; ?>">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
</div>
