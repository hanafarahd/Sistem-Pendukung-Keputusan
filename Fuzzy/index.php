<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Jumlah Data Pada Table - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com/menghitung-jumlah-data-pada-table-dengan-php-dan-mysqli">Menghitung Jumlah Data Pada Table - www.malasngoding.com</a></h2>
 
	<style>
		body{ 
    font: 14px sans-serif; 
    text-align: center; 
    background: url('./assets/rainbow.jpg');
}


.wrapper{ 
    width: 380px; 
    padding: 20px; 
    margin:0 auto; 
    display: block; 
    margin-top: 60px; 
    background: #fff;
}
	</style>
 
 
	<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include 'koneksi.php';
 
	// mengambil data barang
	$data_barang = mysqli_query($koneksi,"SELECT * FROM barang");
 
	// menghitung data barang
	$jumlah_barang = mysqli_num_rows($data_barang);
	?>
 
	<p>Jumlah data barang : <b><?php echo $jumlah_barang; ?></b></p>
 
	<table border="1">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$barang = mysqli_query($koneksi,"SELECT * FROM barang");
			while($b = mysqli_fetch_array($barang)){
				?>
				<tr>
					<td><?php echo $b['kode']; ?></td>
					<td><?php echo $b['nama_barang']; ?></td>
					<td><?php echo $b['jumlah']; ?></td>
					<td><?php echo "Rp. ".number_format($b['harga'])." ,-"; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
</body>
</html>








