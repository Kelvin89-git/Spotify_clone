<?php
session_start(); // Start session for handling user sessions
include 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user data from the database
    $sql = "SELECT * FROM spotify WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Check password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Set session variables if login is successful
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            // Redirect after successful login
            header("Location: index.html");
            exit(); // Make sure to call exit after header
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }
}
$conn->close();
?>
