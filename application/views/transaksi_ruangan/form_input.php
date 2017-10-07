<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah transaksi</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('transaksi_ruangan/post','class="form-horizontal"');
    ?>
    <!--     <input type="hidden" name="id" value="<?php echo $record['id_ruangan']; ?>"> -->
    <div class="box-body">
      <div class="form-group">
        <label for="nama_pelanggan" class="col-sm-2 control-label">Nama Pelanggan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan">
        </div>
      </div>

      <div class="form-group">
        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-6">
          <textarea name="alamat" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="kontak" class="col-sm-2 control-label">No Telepon</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="kontak" data-inputmask='"mask": "9999-9999-9999"' data-mask>
        </div>
      </div>

      <div class="form-group">
        <label for="id_ruangan" class="col-sm-2 control-label">Ruangan</label>
        <div class="col-sm-6">
          <select class="form-control select2" name="id_ruangan" style="width: 100%;">
            <option value="0">Pilih ruangan</option>
            <?php
            foreach ($ruangan as $rg) {
              echo "
              <option value='$rg->id_ruangan'";
                echo $record['id_ruangan']==$rg->id_ruangan?'selected':'';
                echo ">$rg->nama_ruangan</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <input type="hidden" name="harga" value="<?php echo $record['harga']; ?>">

        <div class="form-group">
          <label for="lama_sewa" class="col-sm-2 control-label">Lama sewa</label>
          <div class="col-sm-2">
            <div class="input-group">
              <input type="text" class="form-control" name="lama_sewa">
              <span class="input-group-addon">Hari 
               <span class="glyphicon glyphicon-calendar"></span>
             </div>

           </div>
         </div>

         <div class="form-group">
          <label for="lama_waktu" class="col-sm-2 control-label">Lama waktu</label>
          <div class="col-sm-2">
            <div class="input-group">
              <input type="text" class="form-control" name="lama_waktu">
              <span class="input-group-addon">Jam 
               <span class="fa fa-clock-o"></span>
             </span>
           </div>  
         </div>
       </div>

       <div class="form-group">
        <label for="tanggal_sewa" class="col-sm-2 control-label">Tanggal sewa</label>
        <div class="col-sm-4">
          <div class='input-group date' id='datetimepicker'>
            <input type='text' class="form-control" name="tanggal_sewa" />
            <span class="input-group-addon">
             <span class="glyphicon glyphicon-calendar"></span>
           </span>
         </div>
       </div>
     </div>

        <!-- <div class="form-group">
         <div class='input-group date' id='datetimepicker'>
          <input type='text' class="form-control" />
          <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
         </span>
       </div>
     </div> -->

      <!-- <div class="form-group">
        <label for="tanggal_selesai" class="col-sm-2 control-label">Tanggal selesai</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tanggal_selesai">
        </div>
      </div> -->

      <div class="form-group">
        <label for="tipe_pembayaran" class="col-sm-2 control-label">Tipe pembayaran</label>
        <div class="col-sm-4">
          <select class="form-control" name="tipe_pembayaran">
            <option value="tunai">Tunai</option>
            <option value="transfer">Transfer</option>
          </select>
        </div>
      </div>
      
      <input type="hidden" name="status" value="0">

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah transaksi ruangan</button>
    </div>
  </form>
</div>
</div>
