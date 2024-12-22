<?php 
session_start(); 
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Recipe Manager</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fef6e4; /* Soft cream background */
            color: #333;
            text-align: center;
        }

        /* Welcome Section */
        .welcome {
            background: linear-gradient(135deg, #FFA726, #FF7043); /* Smooth orange gradient */
            color: white;
            padding: 50px 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Slightly darker shadow */
            border-radius: 8px; /* Rounded corners for a modern feel */
        }

        .welcome h1 {
            font-size: 3em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Text shadow for depth */
        }

        .welcome p {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .welcome a {
            text-decoration: none;
            color: white;
            background-color: #FF5722; /* Bright and inviting button color */
            padding: 15px 25px;
            border-radius: 30px; /* Fully rounded button */
            font-size: 1em;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Button shadow */
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }

        .welcome a:hover {
            background-color: #E64A19;
            transform: scale(1.1);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Larger shadow on hover */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .welcome h1 {
                font-size: 2em;
            }

            .welcome p {
                font-size: 1.2em;
            }
        }
    </style>
</head>
<body>
    <div class="welcome">
        <h1>Welcome to Online Recipe Manager</h1>
        <p>Manage and share your favorite recipes with ease.</p>
        <a href="recipes.php">Get Started</a>
    </div>

 
</body>
</html>
<?php include 'includes/footer.php'; ?>
