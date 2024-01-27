<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI LAUNDRY</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        color : #333;
        
    }

    .container {
        width: 80%;
        margin: auto;
        padding: 20px;
        background-color: #f7f7f7;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }
    h4{

        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    .table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .table th {
        background-color: #EEEDEB;
        color: black ;
        
    }

    .btn-primary {
        background-color: #6895D2;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        transition-duration: 0.4s;
    }

    .btn-primary:hover {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
    }
    </style>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <?php
    include '../koneksi.php';
    ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <?php
            $id = $_GET['id'];
            $transaksi = mysqli_query($koneksi, "SELECT * FROM datapendaftartsana WHERE id='$id'");
            while($t = mysqli_fetch_array($transaksi)){
            ?>
                <center><h2>KELAS PUBLIC SPEAKING</h2></center>
                <h3></h3>
                <a href="cetakTSA.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-print"></i> CETAK</a>
                <br/>
                <br/>
                <table class="table">
                    <tr>
                        <th>First Name</th>
                        <th>:</th>
                        <td><?php echo $t['firstName']; ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <th>:</th>
                        <td><?php echo $t['gender']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <td><?php echo $t['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <th>:</th>
                        <td><?php echo $t['Kelas']; ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <th>:</th>
                        <td><?php echo $t['number']; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <th>:</th>
                        <td>
                            <?php
                            // Cek apakah $t['harga'] memiliki nilai numerik
                            if (is_numeric($t['harga'])) {
                                echo "Rp. " . number_format($t['harga']) . " ,-";
                            } else {
                                echo "Nilai harga tidak valid";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <br/>
                <h4 class="text-center">Daftar Pendaftar</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>First Name</th>
                        <th>Kelas</th>
                    </tr>
                    <?php
                    $id = $t['id'];
                    $tsana = mysqli_query($koneksi, "SELECT * FROM datapendaftartsana WHERE id='$id'");
                    while($p = mysqli_fetch_array($tsana)){
                    ?>
                        <tr>
                        <td><?php echo $p['firstName']; ?></td>
                        <td width="5%"><?php echo $p['Kelas']; ?></td>
                        </tr>

                    <?php } ?>
                </table>
                <br/>
                <p><center><i>Terima Kasih Telah Bergabung Pada Kelas Kami</i></center></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>
