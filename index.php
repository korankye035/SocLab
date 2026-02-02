<!DOCTYPE html>
<html>
<head>
  <title>Hackham's SOC Lab | Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-box">
    <h1>Hackham's SOC Lab</h1>
    <p>Log Analysis with Splunk</p>

    <form method="POST" action="login.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p style="margin-top:15px;">
      <a href="register.php">Create an account</a>
    </p>
  </div>
</body>
</html>
