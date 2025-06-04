<?php
$conn = new mysqli("localhost", "root", "", "wander_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Check if user already exists
    $check = $conn->prepare("SELECT * FROM users WHERE username=?");
    $check->bind_param("s", $user);
    $check->execute();
    $res = $check->get_result();

    if ($res->num_rows > 0) {
        echo "exists";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $pass);
        if ($stmt->execute()) {
            echo "registered";
        } else {
            echo "error";
        }
        $stmt->close();
    }
    $check->close();
} else {
    echo "error";
}

$conn->close();
?>
