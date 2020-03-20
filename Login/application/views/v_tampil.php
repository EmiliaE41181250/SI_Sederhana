<!DOCTYPE html>
<html>

<head>

	<title>Literasi Bahasa</title>
	<link rel="stylesheet" href="assets/style/tampil.css">
</head>

<body>

	<center>
		<h1>Data Puisi</h1>
	</center>
	<!-- tambahkan link tambah pada function code ignitor anchor -->
	<center><?php echo anchor('crud/tambah', 'Tambahkan'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Nama Penulis</th>
			<th>Tgl Terbit</th>
			<th>Karya</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		//menampilkan data dari database tabel tb_penulis dgn ketentuan nama kolom yg diambil datanya yaitu nama_penulis, alamat, telepon
		foreach ($tb_konten as $u) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->judul ?></td>
				<td><?php echo $u->nama_penulis ?></td>
				<td><?php echo $u->tgl_terbit ?></td>
				<td><?php echo $u->karya ?></td>
				<td>
					<!-- aksi untuk dapat menghapus data -->
					<?php echo anchor('crud/edit/' . $u->id_puisi, 'Edit'); ?>

					<!-- tambahkan link hapus pada function code ignitor anchor, untuk menghapus data -->
					<?php echo anchor('crud/hapus/' . $u->id_puisi, 'Hapus'); ?>


				</td>
			</tr>
		<?php } ?>
	</table>

	<!-- kedua -->

	<center>
		<!-- membuat link untuk menuju ke form data penulis -->
		<a href="<?php echo base_url('crud2/next2'); ?>">Data Penulis </a>
		<br>
		<!-- membuat link untuk menuju ke form logout -->
		<br>
		<a href="<?php echo base_url('login/logout'); ?>">Logout</a> </center>

	</center>

</body>

</html>