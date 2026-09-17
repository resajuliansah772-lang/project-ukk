<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login SIMPEN</title>
</head>
<body>

    <h1>Login SIMPEN</h1>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'gagal') {
            echo "<p>Email atau password salah!</p>";
        } elseif ($_GET['pesan'] == 'logout') {
            echo "<p>Anda berhasil logout.</p>";
        }
    }
    ?>

    <form action="proses_login.php" method="POST">

        <label>Email</label><br>
        <input type="email" name="email" required>

        <br><br>

        <label>Password</label><br>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Login</button>

    </form>

</body>
</html>