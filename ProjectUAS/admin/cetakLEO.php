<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI KELAS PUBLIC SPEAKING</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>
    <!-- cek apakah sudah login -->
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
            $pendaftar = mysqli_query($koneksi, "SELECT * FROM datapendaftarleo WHERE id='$id'");
            while($t = mysqli_fetch_array($pendaftar)){
            ?>
                <center><h2>PUBLIC SPEAKING</h2></center>
                <h3>NOTA-<?php echo $t['id']; ?></h3>
                <br/>
                <table class="table">
                    <tr>
                        <th>First Name</th>
                        <th>:</th>
                        <td><?php echo $t['firstname']; ?></td>
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
                        <td><?php echo $t['kelas']; ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <th>:</th>
                        <td><?php echo $t['nohp']; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <th>:</th>
                        <td><?php echo "Rp. ".number_format($t['harga'])." ,-"; ?></td>
                    </tr>
                </table>
                <br/>
                <h4>Daftar Pendaftar</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Mentor</th>
                    </tr>
                    <?php
                    $id = $t['id'];
                    $kelas = mysqli_query($koneksi, "SELECT * FROM datapendaftarleo WHERE id='$id'");
                    while($p = mysqli_fetch_array($kelas)){
                    ?>
                        <tr>
                            <td><?php echo $p['kelas']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br/>
                <p><center><i>"Terima Kasih Telah Bergabung Pada Kelas Kami".</i></center></p>
            <?php } ?>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
