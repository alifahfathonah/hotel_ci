<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Transaksi ruangan</h3>
    <?php
    $jumlah_desimal ="0";
    $pemisah_desimal =",";
    $pemisah_ribuan =".";
    ?>
  </div>
  <div class="box-body">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">Lantai 1</a></li>
        <li><a href="#tab_2-2" data-toggle="tab">Lantai 2</a></li>
        <li><a href="#tab_3-2" data-toggle="tab">Lantai 3</a></li>
        <li class="pull-right header"><i class="fa fa-th"></i> Daftar ruangan</li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <?php 
                foreach ($ruangan as $rg) {
                 if ($rg->nama_lantai == "Lantai 1") {
                   echo "<td align='center'><a href='transaksi_ruangan/daftar_sewa/$rg->id_ruangan' title='Daftar sewa' class='btn bg-navy'>$rg->nama_ruangan<br>$rg->jenis_ruangan<br>Kapasitas : $rg->kapasitas orang<br>Rp ".number_format($rg->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",- / jam</a></td>";
                 }
                } 
                ?>
              </tr>
            </table>
          </div>
        </div>

        <div class="tab-pane" id="tab_2-2">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <?php 
                foreach ($ruangan as $rg) {
                 if ($rg->nama_lantai == "Lantai 2") {
                   echo "<td align='center'><a href='transaksi_ruangan/daftar_sewa/$rg->id_ruangan' title='Daftar sewa' class='btn bg-maroon'>$rg->nama_ruangan<br>$rg->jenis_ruangan<br>Kapasitas : $rg->kapasitas orang<br>Rp ".number_format($rg->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",- / jam</a></td>";
                 }
                } 
                ?>
              </tr>
            </table>
          </div>
        </div>

        <div class="tab-pane" id="tab_3-2">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <?php 
                foreach ($ruangan as $rg) {
                 if ($rg->nama_lantai == "Lantai 3") {
                   echo "<td align='center'><a href='transaksi_ruangan/daftar_sewa/$rg->id_ruangan' title='Daftar sewa' class='btn bg-maroon'>$rg->nama_ruangan<br>$rg->jenis_ruangan<br>Kapasitas : $rg->kapasitas orang<br>Rp ".number_format($rg->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",- / jam</a></td>";
                 }
                } 
                ?>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
