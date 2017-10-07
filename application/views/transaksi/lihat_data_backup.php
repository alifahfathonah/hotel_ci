<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Transaksi</h3>
    <small>
      <!-- <?php
      echo anchor('transaksi/post','Tambah transaksi','class="btn bg-purple"');
      ?> -->
    </small>
    <?php
    $jumlah_desimal ="0";
    $pemisah_desimal =",";
    $pemisah_ribuan =".";
    ?>
    <h5 class="pull-right">
      <label class="label label-success">Terpakai</label>
      <label class="label bg-aqua">Standar Room</label> 
      <label class="label bg-navy">Premium Room</label> 
      <label class="label bg-maroon">Deluxe Room</label> 
      <label class="label bg-red">Studio Room</label> 
      <label class="label bg-light-blue">Suite Room</label> 
      <label class="label bg-yellow">President Room</label> 
    </h5>
  </div>
  <div class="box-body">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">Lantai 2</a></li>
        <li><a href="#tab_2-2" data-toggle="tab">Lantai 3</a></li>
        <li><a href="#tab_3-2" data-toggle="tab">Lantai 4</a></li>
        <li class="pull-right header"><i class="fa fa-th"></i> Daftar Kamar</li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <?php
                foreach ($kamar as $k) {
                  if ($k->nama_lantai=="Lantai 2") {
                    if ($k->no_kamar>=201 && $k->no_kamar<=210) {
                      if ($k->kondisi=="Kosong") {
                        if ($k->nama_kelas=="Standar Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-aqua' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Premium Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-navy' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Deluxe Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-maroon' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Studio Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-red' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Suite Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-light-blue' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="President Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-yellow' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        }
                        // echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn btn-danger' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      } else if ($k->kondisi=="Terpakai"){
                        echo "<td align='center'><a class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Terpakai'><i class='fa fa-user'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      }
                    }
                  }
                }
                ?>
              </tr>
              <tr>
                <?php
                foreach ($kamar as $k) {
                  if ($k->nama_lantai=="Lantai 2") {
                    if ($k->no_kamar>=211 && $k->no_kamar<=220) {
                      if ($k->kondisi=="Kosong") {
                        if ($k->nama_kelas=="Standar Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-aqua' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Premium Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-navy' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Deluxe Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-maroon' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Studio Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-red' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Suite Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-light-blue' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="President Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-yellow' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        }
                      } else if ($k->kondisi=="Terpakai"){
                        echo "<td align='center'><a class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Terpakai'><i class='fa fa-user'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      }
                    }
                  }
                }
                ?>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2-2">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <?php
                foreach ($kamar as $k) {
                  if ($k->nama_lantai=="Lantai 3") {
                    if ($k->no_kamar>=301 && $k->no_kamar<=310) {
                      if ($k->kondisi=="Kosong") {
                        if ($k->nama_kelas=="Standar Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-aqua' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Premium Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-navy' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Deluxe Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-maroon' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Studio Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-red' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Suite Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-light-blue' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="President Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-yellow' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        }
                      } else if ($k->kondisi=="Terpakai"){
                        echo "<td align='center'><a class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Terpakai'><i class='fa fa-user'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      }
                    }
                  }
                }
                ?>
              </tr>
              <tr>
                <?php
                foreach ($kamar as $k) {
                  if ($k->nama_lantai=="Lantai 3") {
                    if ($k->no_kamar>=311 && $k->no_kamar<=320) {
                      if ($k->kondisi=="Kosong") {
                        if ($k->nama_kelas=="Standar Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-aqua' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Premium Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-navy' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Deluxe Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-maroon' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Studio Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-red' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="Suite Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-light-blue' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        } else if ($k->nama_kelas=="President Room") {
                          echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-yellow' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                        }
                      } else if ($k->kondisi=="Terpakai"){
                        echo "<td align='center'><a class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Terpakai'><i class='fa fa-user'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      }
                    }
                  }
                }
                ?>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3-2">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <?php
                foreach ($kamar as $k) {
                  if ($k->nama_lantai=="Lantai 4") {
                    if ($k->kondisi=="Kosong") {
                      if ($k->nama_kelas=="Standar Room") {
                        echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-aqua' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      } else if ($k->nama_kelas=="Premium Room") {
                        echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-navy' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      } else if ($k->nama_kelas=="Deluxe Room") {
                        echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-maroon' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      } else if ($k->nama_kelas=="Studio Room") {
                        echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-red' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      } else if ($k->nama_kelas=="Suite Room") {
                        echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-light-blue' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      } else if ($k->nama_kelas=="President Room") {
                        echo "<td align='center'><a href='transaksi/pilih_kamar/$k->id_kamar' class='btn bg-yellow' data-toggle='tooltip' data-placement='top' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                      }
                    } else if ($k->kondisi=="Terpakai"){
                      echo "<td align='center'><a class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Terpakai'><i class='fa fa-user'></i><br>$k->no_kamar<br>$k->tipe_kamar<br>Rp ".number_format($k->harga, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-</a>&nbsp;</td>";
                    }
                  }
                }
                ?>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
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
            <th>Aksi</th>
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
            <td>".anchor('transaksi/check_out/'.$r->id_transaksi,'Check Out', array('class' => 'btn bg-purple', 'onclick'=>"return confirm('Pelanggan melakukan check out?')"))."</td>
          </tr>";
          $no++;}
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
