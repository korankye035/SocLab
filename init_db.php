<?php
// Create / open the database file
$db = new SQLite3(__DIR__ . '/db/users.db');

// Create users table
$db->exec("
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)
");

// Create a default admin user
$defaultPassword = password_hash("password123", PASSWORD_DEFAULT);

$stmt = $db->prepare("
INSERT OR IGNORE INTO users (username, password)
VALUES (:username, :password)
");

$stmt->bindValue(':username', 'admin');
$stmt->bindValue(':password', $defaultPassword);
$stmt->execute();

echo "Database and users table created successfully.";
?>
