<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
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

    <div class="wrapper">
        <div class="container">
            <div class="box form-box">

                <?php
                include("../koneksi.php");
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    // verifikasi unik email

                    $verify_query = mysqli_query($koneksi, "SELECT email FROM users WHERE email='$email'");
                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class = 'message'>
                            <p> This email is used, Try another one please!</p>
                        <div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } else {
                        mysqli_query($koneksi, "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')") or die("Error Occured");

                        echo "<div class = 'message'>
                            <p>Registrartion Sucessfully!</p>
                        <div> <br>";
                        echo "<a href='index.php'><button class='btn'>Login Now</button>";
                    }
                } else {
                ?>

                    <h2>Sign U</h2>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>

                        <div class="field">
                            <input type="submit" class="btn" name="submit" value="register" required>
                        </div>

                        <div class="link">
                            Already have an account? <a href="index.php">Sign In</a>
                        </div>
                    </form>
                </div>
                <?php } ?>
            </div>
        </div>

    </body>

    </html>
