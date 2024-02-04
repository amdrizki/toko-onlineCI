<div class="container-fluid">
	<h4>Laporan Penjualan</h4>
	
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>ID Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<div class="form-group">
					<label>Status Pembayaran</label>
					<select class="form-control">
						<option>Lunas</option>
						<option>Belum Lunas</option>
						<option>Hanya Bayar Setengah</option>
					</select>
				</div>
		</tr>
		
		<?php foreach ($invoice as $inv) : ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
		</tr>
		
		<?php endforeach; ?>
	</table>
</div>