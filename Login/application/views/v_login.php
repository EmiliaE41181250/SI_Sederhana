<!DOCTYPE html>
<html>

<head>
	<title>Literasi Bahasa</title>
</head>

<body>
	<center>
		<h1>Literasi Bahasa <br /> Media Puisi</h1>
		<!-- menambahkan aksi login -->
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
			<table>
				<tr>
					<td>Username</td>
					<!-- untuk membaca username yg diinputkan, sesuai dgn username yg ada di data base -->
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<!-- untuk membaca password yg diinputkan, sesuai dgn password yg ada di data base -->
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>