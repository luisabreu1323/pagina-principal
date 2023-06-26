<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'luis' && $password === '1323') {
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit;
    } else {
        $error = "credenciales invalidas, por favor intente de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="./styles.css">
</head>
<body> 
    <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
    <?php endif ?>

    <form method="POST" action="login.php" class="form-box animated fadeInUp">
    <h1 class="form-title"> inicial sesión</h1>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="iniciar sesión">
</form>
    
</body>
</html>