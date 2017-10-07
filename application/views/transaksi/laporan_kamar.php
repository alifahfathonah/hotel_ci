<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Transaksi</h3>
    <small><?php echo anchor('transaksi/laporan_excel_kamar','<i class="fa fa-print"></i>&nbsp;Cetak Laporan Excel',array('class' => 'btn bg-purple'));?></small>
    <br>
    <br>
    <?php
    $jumlah_desimal ="0";
    $pemisah_desimal =",";
    $pemisah_ribuan =".";
    ?>
    <?php 
    echo form_open('transaksi/laporan_kamar');
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
    <table class="table table-bordered table-hover" id="transaksi">
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
        $no++;}
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>