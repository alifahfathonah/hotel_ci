<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Fasilitas</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('fasilitas/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="fasilitas" class="col-sm-2 control-label">Fasilitas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="fasilitas" placeholder="Fasilitas">
          </div>
        </div>

        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Keterangan Paket</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan paket">
          </div>
        </div>

        <div class="form-group">
          <label for="harga_fasilitas" class="col-sm-2 control-label">Harga Paket</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga_fasilitas" placeholder="Harga paket">
          </div>
        </div>


      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Fasilitas</button>
      </div>
    </form>
  </div>
</div>
