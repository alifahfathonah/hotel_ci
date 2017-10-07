<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Transaksi</h3>
    <small>
      <?php
      echo anchor('transaksi/post','Tambah transaksi','class="btn bg-purple"');
      ?>
    </small>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table>
        <tr>
          <?php
            foreach ($kamar as $k) {
              if ($k->kondisi=="Kosong") {
                echo "<td><a class='btn btn-danger' title='Kosong'><i class='fa fa-circle-o'></i><br>$k->no_kamar</a>&nbsp;</td>";
              } else if ($k->kondisi=="Terpakai"){
                echo "<td><a class='btn btn-success' title='Terpakai'><i class='fa fa-user'></i><br>$k->no_kamar</a>&nbsp;</td>";
              }
            }
          ?>
        </tr>
      </table>
    </div>
  </div>
</div>
