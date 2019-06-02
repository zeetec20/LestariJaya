<?php
$result1 = mysqli_query($conn, "SELECT * FROM obat ORDER BY obat.nama ASC");
$result2 = mysqli_query($conn, "SELECT * FROM obat ORDER BY obat.nama DESC");
$result3 = mysqli_query($conn, "SELECT * FROM obat ORDER BY obat.harga ASC");
$result4 = mysqli_query($conn, "SELECT * FROM obat ORDER BY obat.harga DESC");
?>