<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Tipe Kamar</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('tipe_kamar/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="tipe_kamar" class="col-sm-2 control-label">Tipe kamar</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tipe_kamar" placeholder="Tipe kamar">
          </div>
        </div>
        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Keteangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" placeholder="keterangan">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Tipe kamar</button>
      </div>
    </form>
  </div>
</div>
