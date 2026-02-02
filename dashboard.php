<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hackham's SOC Lab | Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="nav">
  <a href="#">Overview</a>
  <a href="#">Tools</a>
  <a href="#">Skills</a>
  <a href="#">Lab Goal</a>
  <a href="logout.php">Logout</a>
</div>

<div class="container">
  <h1>Welcome to Hackham's SOC Lab</h1>

  <p>
    This lab focuses on real-world log analysis using Splunk,
    generated from attacks against an Ubuntu Server environment.
  </p>

  <h2>Tools & Devices</h2>
  <ul>
    <li>Ubuntu Server</li>
    <li>Kali Linux</li>
    <li>Splunk SIEM</li>
    <li>Apache & SSH</li>
  </ul>

  <h2>Skills Learned</h2>
  <ul>
    <li>Log ingestion</li>
    <li>Web attack detection</li>
    <li>SSH brute-force analysis</li>
    <li>SPL querying</li>
  </ul>

  <h2>Goal</h2>
  <p>
    To simulate SOC monitoring using real logs, not theoretical datasets.
  </p>
</div>

</body>
</html>
