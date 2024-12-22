<?php
require_once 'includes/db_connect.php';
session_start();
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: recipes.php");
        } else {
            echo "<p style='color: red;'>Invalid credentials.</p>";
        }
    } else {
        echo "<p style='color: red;'>No account found with that email.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='css/styles.css'> <!-- Import the external CSS -->
</head>
<body>
    
    <div class="container">
        <form method="post" action="login.php">
            <h2>Login</h2>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    
</body>
</html>
<?php include 'includes/footer.php'; ?>
