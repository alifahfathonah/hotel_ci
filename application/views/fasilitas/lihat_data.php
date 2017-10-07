<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Fasilitas</h3>
    <small>
      <?php
      echo anchor('fasilitas/post','Tambah Fasilitas','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="fasilitas">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Fasilitas</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $jumlah_desimal ="0";
          $pemisah_desimal =",";
          $pemisah_ribuan =".";
          //$onclick = array('onclick'=>"return confirm('Are you sure?')");
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->fasilitas</td>
            <td>$r->keterangan</td>
            <td>Rp ".number_format($r->harga_fasilitas, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</td>
            <td>".anchor('fasilitas/edit/'.$r->id_fasilitas,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('fasilitas/hapus/'.$r->id_fasilitas,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
