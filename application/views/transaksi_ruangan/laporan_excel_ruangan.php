
<div class="box-body">
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th>Nama pelanggan</th>
          <th>Alamat</th>
          <th>Kontak</th>
          <th>Ruangan</th>
          <th>Lama sewa</th>
          <th>Lama waktu</th>
          <th>Tanggal sewa</th>
          <th>Tanggal selesai</th>
          <th>Tipe pembayaran</th>
          <th>Total bayar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $jumlah_desimal ="0";
        $pemisah_desimal =",";
        $pemisah_ribuan =".";
        $no=1;
        $total_bayar=0;
        foreach ($record->result() as $r) {
          echo "<tr>
          <td>$no</td>
          <td>$r->nama_pelanggan</td>
          <td>$r->alamat</td>
          <td>$r->kontak</td>
          <td>$r->nama_ruangan</td>";
          ?>
          <?php
          if ($r->lama_sewa == 0) {
            echo "<td>-</td>";
          } else {
            echo "<td>$r->lama_sewa Hari</td>";
          }

          if ($r->lama_waktu == 0) {
            echo "<td>-</td>";
          } else {
            echo "<td>$r->lama_waktu Jam</td>";
          }
          ?>
          <?php
          echo "
          <td>".tgl_indo($r->tanggal_sewa)."</td>
          <td>".tgl_indo($r->tanggal_selesai)."</td>
          <td>$r->tipe_pembayaran</td>
          <td>Rp ".number_format($r->total_bayar, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</td>
        </tr>";
        $no++;
        $total_bayar = $total_bayar+$r->total_bayar;
      }
      ?>
      <tr><td colspan="10" align="right">Total : </td>
        <td>Rp <?php echo number_format($total_bayar, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);?>,-</td>
      </tr>
    </tbody>
  </table>
</div>
</div>