<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Ruangan</h3>
    <small>
      <?php
      echo anchor('ruangan/post','Tambah Ruangan','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="ruangan">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Ruangan</th>
            <th>Jenis Ruangan</th>
            <th>kapasitas Ruangan</th>
            <th>Lantai</th>
            <th>Harga / jam</th>
           
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $jumlah_desimal ="0";
          $pemisah_desimal =",";
          $pemisah_ribuan =".";
          $no=1;
          foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_ruangan</td>
            <td>$r->jenis_ruangan</td>
            <td>$r->kapasitas</td>
            <td>$r->nama_lantai</td>
            <td>Rp ".number_format($r->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</td>
            
            <td>".anchor('ruangan/edit/'.$r->id_ruangan,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('ruangan/hapus/'.$r->id_ruangan,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
          </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>
