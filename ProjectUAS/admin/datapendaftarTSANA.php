<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
             body {
            font-family: Arial, sans-serif;
            background-color: #eee;
        }

        .container {
            margin: 20px;
        }

        .panel {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
        }

        .panel-heading {
            background-color: #89B9AD;
            color: #fff;
            padding: 10px;
            border-radius: 4px 4px 0 0;
        }

        .panel-body {
            padding: 10px;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-info {
            background-color: #5bc0de;
            color: #fff;
        }

        .btn-warning {
            background-color: #f0ad4e;
            color: #fff;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-bordered>thead>tr>th,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>tbody>tr>td,
        .table-bordered>tfoot>tr>td {
            border: 1px solid #ddd;
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h4>Data Pelanggan</h4>
            </div>
            <div class="panel-body">
                <a href="tambahLeo.php" class="btn btn-sm btn-info pull-right">Tambah</a><br><br>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Harga</th>
                            <th>Bukti</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../koneksi.php";
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM datapendaftartsana ORDER BY firstName ASC");
                        while ($d = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['firstName']; ?></td>
                                <td><?php echo $d['lastName']; ?></td>
                                <td><?php echo $d['gender']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td><?php echo $d['number']; ?></td>
                                <td><?php echo "Rp. " . (is_numeric($d['harga']) ? number_format($d['harga']) : 'N/A') . " ,-"; ?></td>
                                <td><?php echo $d['bukti']; ?></td>
                                <td>
                                    <a href="invoiceLEO.php?id=<?php echo $d['id']; ?>" target="_blank" class="btn btn-sm btn-warning">Invoice</a>
                                    <a href="editL.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
