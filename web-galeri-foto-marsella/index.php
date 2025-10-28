<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    /* Import Google Font */
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background-color: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
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
      margin-bottom: 5px;
      color: #444;
      font-weight: 500;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Responsive */
    @media (max-width: 500px) {
      .login-box {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Login Form</h2>
    <form action="proses_login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required autocomplete="username">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required autocomplete="current-password">

      <input type="submit" value="Login">
    </form>
  </div>

</body>
</html>
