<?php
session_start();
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #fef6e4;
            margin: 0;
            padding: 0;
        }
        .about-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fef6e4;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .about-container h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .about-container p {
            font-size: 1.2em;
            color: #555;
        }
        .highlight {
            color: #ff6b6b;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="about-container">
        <h1>About Our Project</h1>
        <p>
            Welcome to our <span class="highlight">Online Recipe Manager</span>, a platform designed to make cooking and sharing recipes a seamless experience. Our project allows users to  <span class="highlight">organize</span>, and <span class="highlight">discover</span> recipes with ease. Whether you're a seasoned chef or just starting out in the kitchen, our platform is here to inspire culinary creativity and simplify meal planning.
        </p>
        <p>
            Key features include <span class="highlight">searching recipes by just typing it's name </span>. Join us in building a vibrant community where food enthusiasts can come together, share ideas, and make cooking a delightful adventure.
        </p>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
