<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <main>
    <h1>Login</h1>
    <form method="post" action="auth.php">
      <label>Email<input type="email" name="email" required></label>
      <label>Password<input type="password" name="password" required></label>
      <label><input type="checkbox" name="remember"> Remember me</label>
      <button type="submit">Sign in</button>
    </form>
  </main>
  <script src="app.js"></script>
</body>
</html>
