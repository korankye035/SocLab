<?php
session_start();
$db = new SQLite3(__DIR__ . '/db/users.db');

$u = $_POST['username'];
$p = $_POST['password'];

$stmt = $db->prepare("SELECT password FROM users WHERE username = :u");
$stmt->bindValue(':u', $u);
$res = $stmt->execute()->fetchArray();

if ($res && password_verify($p, $res['password'])) {
    $_SESSION['user'] = $u;
    error_log("SUCCESSFUL LOGIN: user=$u");
    header("Location: dashboard.php");
} else {
    error_log("FAILED LOGIN: user=$u");
    echo "Login failed";
}
