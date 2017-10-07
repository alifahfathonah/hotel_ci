<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Lantai</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('lantai_kamar/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="nama_lantai" class="col-sm-2 control-label">Lantai</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_lantai" placeholder="Nama Lantai">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Lantai</button>
      </div>
    </form>
  </div>
</div>
