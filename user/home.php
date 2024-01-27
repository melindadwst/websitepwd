<!DOCTYPE html>
<html>
<head>
    <title>Informasi Public Speaking</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #638889, #89B9AD, #AAD9BB);
        }

        .wrapper {
            width: 80%;
            margin: 15px auto; /* Added margin */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .info {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            margin-top: 20px;
            display: flex;
            align-items: center;
        }

        .info h3 {
            color: #4CAF50;
            display: flex;
            align-items: center;
        }

        .info h3 i {
            margin-right: 10px;
        }

        .info p {
            font-size: 18px;
            color: #333;
        }

        .info img {
            margin-right: 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include 'header1.php';
    ?>
<div class="wrapper">
    <h2>Informasi Kelas Public Speaking</h2>
    <div class="info">
        <img src="../user/mentor1.jpg"  alt="Mentor's Photo">
        <div>
            <h3><i class="fas fa-user"></i> Mentor: Leonardo Edwin</h3>
            <p><i class="fas fa-chalkboard-teacher"></i> Jenis Kelas: Online & Offline</p>
            <p><i class="far fa-calendar-alt"></i> Jadwal Kelas: Senin & Rabu</p>
            <p><i class="far fa-clock"></i> Jam: 19.00 - 21.00</p>
            <a href="formleo.php" class="btn">Daftar Sekarang</a>
        </div>
    </div>
    <div class="info">
        <img src="../user/mentor2.jpg" alt="Mentor's Photo">
        <div>
            <h3><i class="fas fa-user"></i> Mentor: Tsana</h3>
            <p><i class="fas fa-chalkboard-teacher"></i> Jenis Kelas: Online & Offline</p>
            <p><i class="far fa-calendar-alt"></i> Jadwal Kelas: Selasa & Kamis</p>
            <p><i class="far fa-clock"></i> Jam: 20.00 - 22.00</p>
            <a href="formTsa.php" class="btn">Daftar Sekarang</a>
        </div>
    </div>
</div>
</body>
</html>