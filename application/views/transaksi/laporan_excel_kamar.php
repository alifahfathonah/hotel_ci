<div class="box-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>Kontak</th>
        <th>No kamar</th>

        <th>Check in</th>
        <th>Lama tinggal</th>
        <th>Check out</th>
        <th>Tipe pembayaran</th>
        <th>Total pembayaran</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=1;
      $total_bayar=0;
      $jumlah_desimal ="0";
      $pemisah_desimal =",";
      $pemisah_ribuan =".";
      foreach ($record->result() as $r) {
        echo "<tr>
        <td>$no</td>
        <td>$r->nama_pelanggan</td>
        <td>$r->alamat</td>
        <td>$r->kontak</td>
        <td>$r->no_kamar</td>

        <td>".tgl_indo($r->check_in)."</td>
        <td>$r->lama_tinggal hari</td>
        <td>".tgl_indo($r->check_out)."</td>
        <td>$r->tipe_pembayaran</td>
        <td>Rp ".number_format($r->total_bayar, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</td>
      </tr>";
      $no++;
      $total_bayar = $total_bayar+$r->total_bayar;
    }
    ?>
    <tr><td colspan="9" align="right">Total : </td><td>Rp <?php echo number_format($total_bayar, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);?>,-</td></tr>
  </tbody>
</table>
</div>