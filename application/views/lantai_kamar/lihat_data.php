<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Lantai Kamar</h3>
    <small>
      <?php
      echo anchor('lantai_kamar/post','Tambah Lantai Kamar','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="lantai_kamar">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Lantai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_lantai</td>
            <td>".anchor('lantai_kamar/edit/'.$r->id_lantai,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('lantai_kamar/hapus/'.$r->id_lantai,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
