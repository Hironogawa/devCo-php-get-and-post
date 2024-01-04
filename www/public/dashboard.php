<?php include $_SERVER["DOCUMENT_ROOT"] .'/../middleware/guard.php'; ?>
<?php 
    if (session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include './src/components/nav/main-menu.php'; ?>
    <main class="main-container">
        <h1>Dashboard</h1>
        <?php echo "<p>Welcome, $username</p>"; ?>

        <form method="post" action="/auth/logout.php">
            <input type="submit" value="Log Out" class="login-form-button">
        </form>
    </main> 
</body>
</html>
</body>
</html>