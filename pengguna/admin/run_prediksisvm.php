<?php
// Menjalankan script Python dan mendapatkan outputnya
$output = shell_exec("python prediksi.py");

// Format the output for display
$formattedOutput = nl2br($output); // Convert newlines to HTML line breaks

// Wrap the formatted output in <pre> tags for preformatted text display
$formattedOutput = "<pre>".$formattedOutput."</pre>";

// Return the formatted output as the response
echo $formattedOutput;
?>