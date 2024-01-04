<?php include $_SERVER["DOCUMENT_ROOT"] .'/../middleware/guard.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Suche</title>
</head>
<?php
if (session_status() === PHP_SESSION_NONE)
{
    session_start();
}
$username = $_SESSION['username'];


?>
<body>
    <?php include './src/components/nav/main-menu.php'; ?>
    <main class="main-container">
        <?php include './src/components/nav/searchbar.php'; ?>
    </main>
    </body>
</html>