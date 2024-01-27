<?php
include "../koneksi.php";

// Check if id is set from GET
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query to delete data
    $query = "DELETE FROM datapendaftarleo WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "Data deleted successfully!"; // Redirect back to the dataofflineLEO.php page
    } else {
        echo "Failed to delete data!";
    }
} else {
    echo "No ID provided!";
}

header('Location: dataonlineLEO.php'); // Redirect to location1.php
header('Location: dataofflineLEO.php'); 
header('Location: dataonlineTSA.php'); // Redirect to location1.php
header('Location: dataofflineTSA.php');
?>