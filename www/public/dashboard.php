<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: index.php");
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
   <main class="main-container">
         <h1>Dashboard</h1>
         <?php echo "<p>Welcome, $username</p>"; ?>

         <form method="post" action="logout.php">
             <input type="submit" value="Log Out" class="login-form-button">
        </form>
    </main> 
</body>
</html>
</body>
</html>