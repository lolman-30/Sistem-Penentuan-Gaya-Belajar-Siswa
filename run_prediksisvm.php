<?php
// Menjalankan script Python dan mendapatkan outputnya
$output = shell_exec("python prediksisvm.py");
echo $output;
?>