<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Daftar sewa <span class="label bg-maroon"><?php echo $ruangan['nama_ruangan']; ?></span></h3>
		<small>
			<?php
			echo anchor('transaksi_ruangan/post/'.$ruangan['id_ruangan'],'Tambah transaksi ruangan','class="btn bg-purple"');
			?>
		</small>
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

						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$jumlah_desimal ="0";
					$pemisah_desimal =",";
					$pemisah_ribuan =".";
					$no=1;
					foreach ($record as $r) {
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
						<td>".anchor('transaksi_ruangan/selesai/'.$r->id_transaksi_ruangan,'Selesai', array('class' => 'btn bg-purple', 'onclick'=>"return confirm('Selesai sewa ruangan?')"))."</td>
					</tr>";
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</div>
