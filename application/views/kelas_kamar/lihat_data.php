<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Kelas Kamar</h3>
    <small>
      <?php
      echo anchor('kelas_kamar/post','Tambah Kelas Kamar','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="kelas">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Nama Kelas Kamar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_kelas</td>

            <td>".anchor('kelas_kamar/edit/'.$r->id_kelas,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('kelas_kamar/hapus/'.$r->id_kelas,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
