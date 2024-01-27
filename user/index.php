<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #638889, #89B9AD, #AAD9BB);
            font-family: ArgentumSans, Arial, sans-serif;
            height: 100vh;
            margin: 0;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            font-family: "ArgentumSans", sans-serif;
            font-weight: bold;
            font-size: 40px;
            margin-bottom: 20px;
            color: #fff;
            animation: slideIn 1s ease-in-out;
        }

        .wrapper {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.3);
            padding: 30px;
            width: 350px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .wrapper:hover {
            transform: scale(1.05);
            box-shadow: 0px 15px 30px 0px rgba(0,0,0,0.4);
        }

        .wrapper input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
        }

        .wrapper input[type="submit"] {
            cursor: pointer;
            background-color: #0072ff;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .wrapper input[type="submit"]:hover {
            background-color: #00c6ff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .form-group input::placeholder {
            color: #fff;
        }

        .form-group input[type="submit"] {
            background-color: #0072ff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #00c6ff;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #000;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .container {
            display: flex;
            align-items: center; 
            justify-content: space-between; 
        }

        .title {
            font-size: 40px;
            font-weight: bold;
            margin-right: 20px;
            font-family: "ArgentumSans", sans-serif;
            animation: colorChange 2s infinite;
        }

        @keyframes colorChange {
        0% { color: #B6BBC4; }
        50% { color: #67729D;}
        100% { color: #7C93C3; }
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <?php
            include '../koneksi.php';
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'>Login Gagal! username dan password salah</div>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<div class='alert alert-info'> Anda Berhasil Logout</div>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "<div class='alert alert-danger'> Anda Harus Login untuk akses ke halaman admin</div>";
                }
            }
            ?>
            <form action="home.php" method="post">
                <div class="panel">
                    <h2>Sign In</h2>
                    <br>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Log In">
                    </div>
                    <div class="form-group">
                        <p>Belum punya akun? <a href="register.php">Register disini</a></p>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
