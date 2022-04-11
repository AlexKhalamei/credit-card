<?php
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "INSERT INTO credit_card_leads (userPhone, userEmail) VALUES ('$userPhone', '$userEmail')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
