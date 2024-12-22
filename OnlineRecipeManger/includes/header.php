<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Recipe Manager</title>
    <link rel="stylesheet" href="css/styles.css?v=1">
 <!-- Link to CSS -->
    
</head>
<body>
    <header>
        <h1>Online Recipe Manager</h1>
        <nav>
    <a href="index.php">Home</a>
    <a href="contact.php">Contact Us</a> <!-- Link to Contact Us page -->
    <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php else: ?>
        <a href="recipes.php">Recipes</a>
    <?php endif; ?>
    <a href="aboutus.php">About Us</a>
</nav>

<?php if (isset($_SESSION['user_id'])): ?>
    <div class="fixed-logout">
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
<?php endif; ?>
    </header>
    <main>
    
  

