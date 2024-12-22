<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirect to login page if not logged in
    exit;
}

$csvFile = 'D:/Downloads/recipes.csv/recipes.csv';  // Update this path accordingly

// Read the CSV file and store it in an array
$recipes = [];
if (($file = fopen($csvFile, 'r')) !== false) {
    // Skip the header row
    fgetcsv($file);

    // Loop through each row and store the data
    while (($row = fgetcsv($file)) !== false) {
        $recipes[] = [
            'recipe_name' => $row[0],
            'prep_time' => $row[1],
            'cook_time' => $row[2],
            'total_time' => $row[3],
            'servings' => $row[4],
            'yield' => $row[5],
            'ingredients' => $row[6],
            'directions' => $row[7],
            'rating' => $row[8],
            'url' => $row[9],
            'cuisine_path' => $row[10],
            'nutrition' => $row[11],
            'timing' => $row[12],
            'img_src' => $row[13]
        ];
    }
    fclose($file);
}

include 'includes/header.php';
?>
<link rel="stylesheet" href='css/styles.css'>
<div class="container">
  
    <form method="POST" action="recipes.php">
        <label for="search">Search for Recipes:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Search</button>
    </form>

    <h3>Results</h3>
    <ul style="list-style-type: none; padding: 0; margin: 0; font-family: Arial, sans-serif; font-size: 16px;">
    <?php
    if (isset($_POST['search'])) {
        $searchTerm = strtolower($_POST['search']);
        foreach ($recipes as $recipe) {
            if (strpos(haystack: strtolower($recipe['recipe_name']), needle: $searchTerm) !== false) {
                echo '<li style="margin: 8px 0;">
                        <a href="recipe_details.php?recipe_name=' . urlencode($recipe['recipe_name']) . '" 
                           style="text-decoration: none; color: #007BFF; padding: 10px; display: inline-block; border: 1px solid #007BFF; border-radius: 5px;">
                           ' . htmlspecialchars($recipe['recipe_name']) . '
                        </a>
                      </li>';
            }
        }
    }
    ?>
</ul>


</div>

<?php include 'includes/footer.php'; ?>
