<?php
// Include your database connection file
include '../koneksi.php';

// Check if form is submitted
if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['kelas']) && isset($_POST['number']) && isset($_POST['harga']) && isset($_POST['bukti'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];
    $number = $_POST['number'];
    $harga = $_POST['harga'];
    $bukti = $_POST['bukti'];

    // Query to insert data
    $query = "INSERT INTO datapendaftartsana (firstName, lastName, gender, email, kelas, number, harga, bukti) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('ssssssis', $firstName, $lastName, $gender, $email, $kelas, $number, $harga, $bukti);
    $stmt->execute();

    // Check for errors during execution
    if($stmt->error){
        echo "Error during execution: " . $stmt->error;
    } else {
        if($stmt->affected_rows > 0){
            echo "Data added successfully!";
        } else {
            echo "Failed to add data!";
        }
    }
} else {
    echo "Form not submitted!";
}
?>
