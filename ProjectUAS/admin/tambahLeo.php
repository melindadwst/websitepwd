<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <!-- Tambahkan link jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 60%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .panel-heading {
            padding: 10px 15px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel-body {
            padding: 15px;
        }

        h1 {
            color: #444;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .form-group .radio-inline {
            display: inline-block;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
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
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
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

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<?php
include '../koneksi.php';
?>
<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>TAMBAH DATA</h1>
                </div>
                <div class="panel-body">
                    <form action="detailL.php" method="post">

                        <!-- Updated action attribute -->
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" />
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" />
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m"
                                        id="male" />Male</label>
                                <label for="female" class="radio-inline"><input type="radio" name="gender" value="f"
                                        id="female" />Female</label>
                                <label for="others" class="radio-inline"><input type="radio" name="gender" value="o"
                                        id="others" />Others</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <div>
                                <label for="offline" class="radio-inline"><input type="radio" name="kelas"
                                        value="Offline" id="offline" />Offline</label>
                                <label for="online" class="radio-inline"><input type="radio" name="kelas" value="Online"
                                        id="online" />Online</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="nohp">Phone Number</label>
                            <input type="nohp" class="form-control" id="nohp" name="nohp" />
                        </div>
                        <!-- Tambahkan input hidden untuk kode dan harga -->
                        <input type="hidden" id="kode" name="kode" value="347243234" />
                        <input type="hidden" id="harga" name="harga" value="280000" />
                        <div class="form-group">
                            <label for="kode">Kode Pembayaran (BNI) </label>
                            <input type="text" class="form-control" id="kodeDisplay" disabled />
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="hargaDisplay" disabled />
                        </div>
                        <div class="form-group">
                <label for="bukti">Bukti</label>
                <input type="file" class="form-control" id="bukti" name="bukti" accept="image/*" required>
            </div>
                        <input type="submit" class="btn btn-primary" />
                        <a href="../form-reg-user/detail.php" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set nilai otomatis ketika halaman dimuat
        $(document).ready(function () {
            // Tetapkan nilai otomatis untuk kode dan harga
            var kode = "347243234";
            var harga = 280000;

            // Tampilkan nilai otomatis pada field input
            $('#kodeDisplay').val(kode);
            $('#hargaDisplay').val('Rp. ' + formatRupiah(harga));
        });

        // Format angka menjadi format Rupiah
        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return ribuan;
        }
    </script>
</body>

</html>
