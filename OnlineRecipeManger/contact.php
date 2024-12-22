<?php
include 'includes/db_connect.php';
session_start();
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact_queries (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $query)) {
        $success_message = "Your message has been sent successfully.";
    } else {
        $error_message = "There was an error sending your message. Please try again.";
    }
}
?>
<!-- Picture Popup -->
<div id="popupImage" class="hidden">
    <img src="images/download.jpeg" alt="Contact Us Image">
</div>
<!-- Background Music -->
<audio id="backgroundMusic" loop>
    <source src="music/background_music.mp3" type="audio/mpeg">

</audio>

<script>
    // Play background music when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        var music = document.getElementById('backgroundMusic');
        music.play();
    });
</script>

<h2>Contact Us</h2>
<p>We'd love to hear from you! Use the form below to send us your feedback, questions, or concerns.</p>

<?php if (!empty($success_message)): ?>
    <p class="success"><?php echo $success_message; ?></p>
<?php elseif (!empty($error_message)): ?>
    <p class="error"><?php echo $error_message; ?></p>
<?php endif; ?>

<link rel="stylesheet" href='css/styles.css'>

<form method="post" action="contact.php">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Your Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
</form>

<?php include 'includes/footer.php'; ?>
