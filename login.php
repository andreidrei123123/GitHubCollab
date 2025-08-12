<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
</head>

  
<body>
  <main class="card">
    <h1>Login</h1>
    <form action="login_process.php" method="post">
      <label>Email
        <input type="email" name="email" required />
      </label>
      <label>Password
        <input type="password" name="password" required />
      </label>
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
  </main>
</body>
  
</html>

