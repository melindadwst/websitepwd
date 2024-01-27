<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Login</title>
</head>
<body>

<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Assuming your form has a username field
    $password = md5($_POST['password']);

    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password ='$password'");
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/home.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
}
?>

<div class="container">
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') {
        echo '<p class="error-message">Username or password is incorrect.</p>';
    }
    ?>
</div>

</body>
</html>
