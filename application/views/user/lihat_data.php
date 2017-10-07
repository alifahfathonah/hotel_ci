<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">User akses</h3>
    <small>
      <?php
      echo anchor('user/post','Tambah User','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="user">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Level</th>
            <th>Login Terakhir</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
              <td>$no</td>
              <td>$r->nama_lengkap</td>
              <td>$r->username</td>
              <td>$r->level</td>
              <td>".tgl_indo_2($r->last_login)."</td>

              <td>".anchor('user/edit/'.$r->id_user,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('user/hapus/'.$r->id_user,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>

            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
