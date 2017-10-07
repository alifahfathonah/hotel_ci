<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Manajemen menu</h3>
		<small>
			<?php
			echo anchor('manajemen_menu/post','Tambah Manajemen menu','class="btn bg-purple"');
			?>
		</small>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="menu">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Nama menu</th>
						<th>Link</th>
						<th>Icon</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($record->result() as $r) {
						echo "<tr>
						<td>$no</td>
						<td>$r->nama_menu</td>
						<td>$r->link</td>
						<td><i class='$r->icon'></i></td>
						<td>$r->level</td>
						<td>".anchor('manajemen_menu/edit/'.$r->id_menu,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple'))."  ".anchor('manajemen_menu/hapus/'.$r->id_menu,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."</td>
					</tr>";
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</div>
