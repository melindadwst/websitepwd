<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .alert-info {
            background-color: #5bc0de;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
include "../koneksi.php";

// Check if form is submitted
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $harga = $_POST['harga'];
    $bukti = $_POST['bukti'];
    $transaksi_status = $_POST['status']; // Changed from $_POST['transaksi_status']

    // Update data in database
    $query = "UPDATE datapendaftarleo SET firstname=?, lastname=?, gender=?, email=?, nohp=?, harga=?, bukti=?, transaksi_status=? WHERE id=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('ssssssssi', $firstname, $lastname, $gender, $email, $nohp, $harga, $bukti, $transaksi_status, $id);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "Data updated successfully!";
    } else {
        echo "Failed to update data!";
    }
} else {
    // Get id from URL
    $id = $_GET['id'];

    // Fetch data from database
    $query = "SELECT * FROM datapendaftarleo WHERE id=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
}
?>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" value="<?php echo $data['firstname']; ?>"><br>
    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" value="<?php echo $data['lastname']; ?>"><br>
    <label for="gender">Gender:</label><br>
    <input type="text" id="gender" name="gender" value="<?php echo $data['gender']; ?>"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>"><br>
    <label for="nohp">Phone Number:</label><br>
    <input type="text" id="nohp" name="nohp" value="<?php echo $data['nohp']; ?>"><br>
    <label for="harga">Harga:</label><br>
    <input type="text" id="harga" name="harga" value="<?php echo $data['harga']; ?>"><br>
    <label for="bukti">Bukti:</label><br>
    <input type="text" id="bukti" name="bukti" value="<?php echo $data['bukti']; ?>"><br>
    <input type="submit" class="btn btn-primary" value="Ubah">
</form>

</body>
</html>
