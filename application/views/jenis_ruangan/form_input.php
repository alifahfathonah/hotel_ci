<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah jenis ruangan</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('jenis_ruangan/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="jenis_ruangan" class="col-sm-2 control-label">Jenis ruangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_ruangan" placeholder="jenis ruangan">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah jenis ruangan</button>
      </div>
    </form>
  </div>
</div>
