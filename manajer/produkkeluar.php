<?php 
	include 'header.php';
 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="card mb-3">
					<div class="card-body">
						<h3>Data Produk keluar</h3>
						<p class="text-muted">Halaman Semua Data Produk keluar</p>
						<hr>

						<table id="me" class="table table-bordered table-hover table-striped table-sm">
							<thead>
							<tr>
								<th width="1%">No</th>
								<th>Tanggal</th>
								<th>Kode Produk</th>
								<th>Nama Produk</th>
								<th>Jenis Produk</th>
								<th>Jumlah</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
								$no = 1; 
								$produk = mysqli_query($koneksi,"SELECT * FROM produkkeluar ORDER BY tgl DESC");
								while ($d = mysqli_fetch_array($produk)) {
							 	?>

								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $d['tgl']; ?></td>
									<td><?php echo $d['kd_produk']; ?></td>
									<td><?php echo $d['nm_produk']; ?></td>
									<td><?php echo $d['jenis']; ?></td>
									<td><?php echo $d['jumlah']; ?></td>
								</tr>

								<?php 
									}
								 ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
<br>
<br>

<?php 
	include 'footer.php';
 ?>