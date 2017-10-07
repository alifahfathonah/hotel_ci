<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Transaksi</h3>
    <small><?php echo anchor('transaksi_ruangan/laporan_excel_ruangan','<i class="fa fa-print"></i>&nbsp;Cetak Laporan Excel',array('class' => 'btn bg-purple'));?></small>
    <br>
    <br>
    <?php
    $jumlah_desimal ="0";
    $pemisah_desimal =",";
    $pemisah_ribuan =".";
    ?>
    <?php 
    echo form_open('transaksi_ruangan/laporan_ruangan');
    ?>
    <div class="form-group">
      <div class="col-sm-8">
        <div class="col-sm-4">
          <div class='input-group date' id='datepicker'>
            <input type='text' class="form-control" name="tanggal1" placeholder="Tanggal Mulai" />
            <span class="input-group-addon">
             <span class="glyphicon glyphicon-calendar"></span>
           </span>
         </div>
       </div>

       <div class="col-sm-4">
        <div class='input-group date' id='datepicker2'>
          <input type='text' class="form-control" name="tanggal2" placeholder="Tanggal Selesai" />
          <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
         </span>
       </div>
     </div>

     <div class="col-sm-2">
       <button type="submit" class="btn bg-purple" name="submit">Cari</button>
     </div>
   </div>
 </div>
</form>  
</div>
<div class="box-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="transaksi_ruangan">
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
      }
      ?>
    </tbody>
  </table>
</div>
</div>
</div>