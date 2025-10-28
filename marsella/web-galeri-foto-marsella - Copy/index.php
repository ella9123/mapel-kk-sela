<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <style>
    /* Global Styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #2575fc;
      outline: none;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #2575fc;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #1a5edb;
    }

    .extra-options {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .extra-options a {
      color: #2575fc;
      text-decoration: none;
    }

    .extra-options a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="login-container">
    <h2>Login</h2>
    <form action="proses_login.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">

      <div class="extra-options">
        <p><a href="#">Lupa password?</a></p>
        <p>Belum punya akun? <a href="#">Daftar</a></p>
      </div>
    </form>
  </div>

</body>

</html>
