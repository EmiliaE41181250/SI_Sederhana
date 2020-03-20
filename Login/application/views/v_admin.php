<!DOCTYPE html>
<html>

<head>
	<!-- untuk membuat halaman admin -->
	<title>Literasi Bahasa</title>
</head>

<body>
	<!-- tanggapan jika login berhasil -->
	<center>
		<h1>Login berhasil !</h1>
		<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
		<a href="<?php echo base_url('crud/next'); ?>">Data Puisi </a> <br><br>
		<a href="<?php echo base_url('crud2/next2'); ?>">Data Penulis </a> <br><br>
		<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
	</center>
</body>

</html>