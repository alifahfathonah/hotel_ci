<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tipe Kamar</h3>
    <small>
      <?php
      echo anchor('tipe_kamar/post','Tambah tipe kamar','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="tipe_kamar">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Tipe Kamar</th>
            <th>keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->tipe_kamar</td>
            <td>$r->keterangan</td>
            <td>".anchor('tipe_kamar/edit/'.$r->id_tipe_kamar,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('tipe_kamar/hapus/'.$r->id_tipe_kamar,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
