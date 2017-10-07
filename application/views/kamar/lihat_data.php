<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Kamar</h3>
    <small>
      <?php
      echo anchor('kamar/post','Tambah kamar','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="kamar">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Nomor kamar</th>
            <th>Lantai</th>
            <th>Kelas</th>
            <th>Tipe kamar</th>
            <!-- <th>Fasilitas</th> -->
            <th>Harga/malam</th>
            <th>Kondisi</th>
            <th width="15%">Aksi</th>
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
            <td>$r->no_kamar</td>
            <td>$r->nama_lantai</td>
            <td>$r->nama_kelas</td>
            <td>$r->tipe_kamar</td>

            <td>Rp ".number_format($r->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</td>
            <td>$r->kondisi</td>

            <td>".anchor('kamar/edit/'.$r->id_kamar,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('kamar/hapus/'.$r->id_kamar,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
            </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
