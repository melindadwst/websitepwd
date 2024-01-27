<?php
// In class-info.php
if(isset($_SESSION['mentor'])){
    if($_SESSION['mentor'] == 'Leo') {
        echo "<h3>Mentor: Leonardo Edwin</h3>";
        echo "<p>Jenis Kelas: Online & Offline</p>";
        echo "<p>Jadwal Kelas: Senin & Rabu</p>";
        echo "<p>Jam: 19.00 - 21.00</p>";
    } else if($_SESSION['mentor'] == 'Tsa') {
        echo "<h3>Mentor: Tsana</h3>";
        echo "<p>Jenis Kelas: Online & Offline</p>";
        echo "<p>Jadwal Kelas: Selasa & Kamis</p>";
        echo "<p>Jam: 20.00 - 22.00</p>";
    }
} else {
    echo "No class information available.";
}
?>