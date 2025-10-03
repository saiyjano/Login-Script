<?php
session_start();

// DEINE LOGINDATEN
const USERNAME = "admin";
const PASSWORD = "123";

$message = '';

// ÜBERPRÜFUNG DER ANMELDEDATEN
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username'] ?? '');
  $password = $_POST['password'] ?? '';

  if ($username === '' || $password === '') {
    $message = "Bitte Benutzername und Passwort eingeben.";
  } else {
    if ($username === USERNAME && $password === PASSWORD) {
      $_SESSION['user'] = $username;
      header('Location: index.php'); // Weiterleitung zur geschützten Seite
      exit;
    } else {
      $message = "Ungültiger Benutzername oder Passwort.";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <style>
    Platz für deine CSS
  </style>
</head>

<body>
  <h1>Dein LOGIN</h1>

  <?php if ($message !== ''): ?>
    <?= $message ?>
  <?php endif; ?>

  <form method="post" action="">
    <label for="username">Benutzername</label>
    <input type="text" name="username" id="username" required />

    <label for="password">Passwort</label>
    <input type="password" name="password" id="password" required />

    <button type="submit" name="go">Login</button>
  </form>

</body>

</html>
