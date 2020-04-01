<?php
	include 'gudang_header.php';
?>

	<div class="content">
	<h2>Data Barang Masuk</h2>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Barang</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tanggal Keluar</th>
			<th>ID Pelanggan</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_keluar, id_pelanggan from barang_keluar");

		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td><?php echo $d['tgl_keluar']; ?></td>
				<td><?php echo $d['id_pelanggan']; ?></td>
			</tr>
	<?php 
		}
	?>

	</table>

		<div class="container-btn-tambah">
			<button onclick="document.getElementById('tambah').style.display='block'">Tambah Barang Keluar</button>
		</div>

	</div>

	<!-- popup tambah barang keluar -->

	<div id="tambah" class="popup-tambah">
		<form class="container-form" action="tambah_bkeluar.php" method="post">

			<div class="close-container">
				<span onclick="document.getElementById('tambah').style.display='none'" class="close" title="Close">&times;</span>
				<h1 style="font-size: 40px">Tambah Barang Keluar</h1>
			</div>

			<div class="content-container" style="padding: 16px; font-size: 30px">
				<label><b>Nama Barang</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Isikan nama barang" name="nama" required>

      			<label><b>Jumlah</b></label>
      			<input type="integer" placeholder="Isikan jumlah barang" name="jumlah" required>

      			<label><b>Nama Supplier</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Nama Suppier" name="supplier" required>

      			<label><b>Nama Pelanggan</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Nama Pelanggan" name="pelanggan" required>
        
      			<button type="submit">OK</button>				
			</div>
			
		</form>		
	</div>

<?php
	include 'footer.php';
?>