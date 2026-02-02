<?php
$db = new SQLite3(__DIR__ . '/db/users.db');

$username = trim($_POST['username']);
$password = $_POST['password'];

if (strlen($username) < 3 || strlen($password) < 6) {
    error_log("FAILED REGISTRATION: weak credentials user=$username");
    die("Username or password too short.");
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $db->prepare(
  "INSERT INTO users (username, password) VALUES (:u, :p)"
);
$stmt->bindValue(':u', $username);
$stmt->bindValue(':p', $hash);

try {
    $stmt->execute();
    error_log("NEW USER REGISTERED: user=$username");
    echo "Account created successfully. <a href='index.php'>Login</a>";
} catch (Exception $e) {
    error_log("FAILED REGISTRATION: duplicate user=$username");
    echo "Username already exists.";
}
