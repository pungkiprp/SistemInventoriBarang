<?php
	include 'gudang_header.php';
?>

	<div class="content">
	<h2>Data Supplier</h2>

	<form action="gudang_cari.php" method="get">
	<div class="cari">
			<h3>Cari: </h3>
			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari pelanggan ..." name="cari_sup">	
		</div>
	</form>

	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor Telepon / HP</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		if (isset($_GET['cari_sup'])){
			$cari_sup = $_GET['cari_sup'];
			$data = mysqli_query($koneksi,"select nama_supplier, alamat, no_telepon from supplier where nama_supplier like '%$cari_sup%' ");
		}else{
			$data = mysqli_query($koneksi,"select nama_supplier, alamat, no_telepon from supplier");
		}
		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td width="50%"><?php echo $d['nama_supplier']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td width="30%"><?php echo $d['no_telepon']; ?></td>
			</tr>
	<?php 
		}
	?>

	</table>

	<div class="container-btn-tambah">
		<button onclick="window.location.href='zeroSupplier.php'">Tambah Supplier</button>
	</div>


	</div>



<?php
	include 'footer.php';
?>