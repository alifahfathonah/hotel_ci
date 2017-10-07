<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Jenis ruangan</h3>
    <small>
      <?php
      echo anchor('jenis_ruangan/post','Tambah jenis ruangan','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="jenis_ruangan">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Jenis ruangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->jenis_ruangan</td>
            <td>".anchor('jenis_ruangan/edit/'.$r->id_jenis_ruangan,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('jenis_ruangan/hapus/'.$r->id_jenis_ruangan,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
