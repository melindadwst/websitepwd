<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    <link rel="stylesheet" href="../css/detail.css">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .btn-pay {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-pay:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    include '../koneksi.php';

    // Tangkap data dari formulir detail pendaftaran
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $Kelas = $_POST['Kelas'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $harga = $_POST['harga'];
    $bukti = $_POST['bukti'];

    // Proses penyimpanan data ke dalam database
    $query = "INSERT INTO datapendaftartsana (firstName, lastName, gender, Kelas, email, number, harga, bukti) VALUES ('$firstName', '$lastName', '$gender', '$Kelas', '$email', '$number', '$harga', '$bukti')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
    ?>

    <div class="container">
        <h2>Detail Pendaftaran Kelas Public Speaking</h2>
        <table>
            <tr>
                <td>First Name <b>:</b></td>
                <td><?php echo $_POST['firstName'] ?></td>
            </tr>
            <tr>
                <td>Last Name <b>:</b></td>
                <td><?php echo $_POST['lastName'] ?></td>
            </tr>
            <tr>
                <td>Gender <b>:</b></td>
                <td><?php echo $_POST['gender'] ?></td>
            </tr>
            <tr>
                <td>Kelas <b>:</b></td>
                <td><?php echo $_POST['Kelas'] ?></td>
            </tr>
            <tr>
                <td>Email <b>:</b></td>
                <td><?php echo $_POST['email'] ?></td>
            </tr>
            <tr>
                <td>Phone <b>:</b></td>
                <td><?php echo $_POST['number'] ?></td>
            </tr>

            <tr>
                <td>Harga <b>:</b></td>
                <td><?php echo $_POST['harga'] ?></td>
            </tr>
            <tr>
                <td>Bukti <b>:</b></td>
                <td><?php echo $_POST['bukti'] ?></td>
            </tr>

        </table>
        <br>
        <br>
        <h2>Detail Informasi Pendaftaran Kelas Public Speaking</h2>
        <?php
            echo "<h3>Mentor: Tsana</h3>";
            echo "<p>Alamat: Rp. Jl.Mawar No 90 Jakarta Pusat</p>";
            echo "<p>Jenis Kelas: Online & Offline</p>";
            echo "<p>Jadwal Kelas: Selasa & Kamis</p>";
            echo "<p>Jam: 20.00 - 22.00</p>";
            echo "<p>Jika Anda Mengikuti Kelas Online Kami, Link Zoom Akan di berikan melalui email anda pada h-1 sebelum kelas di mulai,</p>";
        
        ?>


        <!-- <table>


    </table> -->


    </div>
</body>

</html>