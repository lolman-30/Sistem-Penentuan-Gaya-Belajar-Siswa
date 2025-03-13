<?php
session_start();

// Assuming you are using MySQL as your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_nentuin";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON data from the request body
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// Get the idUsers from the session
$idUsers = $_SESSION['idUsers'];

// Prepare the SQL statement to insert the data into the table
$sql = "INSERT INTO hasil_pilihan (idUsers, V1, V2, V3, V4, V5, V6, V7, V8, V9, V10, V11, V12, A1, A2, A3, A4, A5, A6, A7, A8, A9, A10, A11, A12, K1, K2, K3, K4, K5, K6, K7, K8, K9, K10, K11, K12) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("sssssssssssssssssssssssssssssssssssss", 
    $idUsers, $data['V1'], $data['V2'], $data['V3'], $data['V4'], $data['V5'], $data['V6'], $data['V7'], $data['V8'], $data['V9'], $data['V10'], $data['V11'], $data['V12'],
    $data['A1'], $data['A2'], $data['A3'], $data['A4'], $data['A5'], $data['A6'], $data['A7'], $data['A8'], $data['A9'], $data['A10'], $data['A11'], $data['A12'], 
    $data['K1'], $data['K2'], $data['K3'], $data['K4'], $data['K5'], $data['K6'], $data['K7'], $data['K8'], $data['K9'], $data['K10'], $data['K11'], $data['K12']);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    $response = array("status" => "success", "message" => "Results saved successfully");
} else {
    $response = array("status" => "error", "message" => "Failed to save results");
}

// Close the database connection
$stmt->close();
$conn->close();

// Send the response back to the client as JSON
header("Content-Type: application/json");
echo json_encode($response);
?>