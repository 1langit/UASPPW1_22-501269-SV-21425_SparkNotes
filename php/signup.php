<?php
include 'connect.php';

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$emailCheckResult = $conn->query("SELECT * FROM user WHERE email='$email'");

if ($emailCheckResult->num_rows > 0) {
    echo "Email already exists. Please use a different email.";
} else {

    // Insert user data into the database
    $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id;
        echo "User created successfully. User ID: " . $user_id;
        header("Location: ../page/account.php?sign=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
