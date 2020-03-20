<!DOCTYPE html>
<html>

<head>

    <title>Literasi Bahasa</title>
</head>

<body>

    <center>
        <h1>Tentang Penulis</h1>
    </center>
    <!-- tambahkan link tambah pada function code ignitor anchor -->
    <center><?php echo anchor('crud2/tambah2', 'Tambahkan'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Nama Penulis</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        //menampilkan data dari database tabel tb_penulis dgn ketentuan nama kolom yg diambil datanya yaitu nama_penulis, alamat, telepon
        foreach ($tb_penulis as $u) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nama_penulis ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->telepon ?></td>

                <td>
                    <!-- aksi untuk dapat menghapus data -->
                    <?php echo anchor('crud2/edit2/' . $u->id_penulis, 'Edit'); ?>

                    <!-- tambahkan link hapus pada function code ignitor anchor, untuk menghapus data -->
                    <?php echo anchor('crud2/hapus2/' . $u->id_penulis, 'Hapus'); ?>

                </td>
            </tr>
        <?php } ?>
    </table>
    <center>
        <!-- membuat link untuk menuju ke form data puisi -->
        <a href="<?php echo base_url('crud/next'); ?>">Data Puisi </a>
        <br>
        <!-- membuat link untuk menuju ke form logout -->
        <br>
        <a href="<?php echo base_url('login/logout'); ?>">Logout</a> </center>

</body>

</html>