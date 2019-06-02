<?php
function rupiah($uang){
    $rupiah = "Rp" . number_format($uang, 2, ',', '.');
    return $rupiah;
}
?>