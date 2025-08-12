<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <main class="card">
    <h1>Register</h1>
    <form action="register_process.php" method="post">
      <label>Full Name
        <input type="text" name="fullname" required />
      </label>
      <label>Email
        <input type="email" name="email" required />
      </label>
      <label>Password
        <input type="password" name="password" required />
      </label>
      <label>Confirm Password
        <input type="password" name="confirm_password" required />
      </label>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </main>
</body>
</html>
