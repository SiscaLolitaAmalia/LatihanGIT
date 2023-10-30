<html>

<head>
    <title>Hasil Input Data Siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td><?php echo $nis; ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td><?php echo $kelas; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?php echo $tgl; ?></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td><?php echo $tpl; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td><?php echo $agama; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Admin'); ?>">Kembali ke Form Input</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>