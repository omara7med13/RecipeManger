<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirect to login page if not logged in
    exit;
}

$csvFile = 'D:\Downloads\recipes.csv\recipes.csv'; 

// Get the recipe name from the query string
if (isset($_GET['recipe_name'])) {
    $recipe_name = $_GET['recipe_name']; // Recipe name passed from search results
} else {
    header("Location: recipes.php");
    exit;
}

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

// Search for the specific recipe based on the recipe name
$recipe_details = null;
foreach ($recipes as $recipe) {
    if (strtolower($recipe['recipe_name']) === strtolower($recipe_name)) {
        $recipe_details = $recipe;
        break;
    }
}

if (!$recipe_details) {
    echo "<p>Recipe not found!</p>";
    exit;
}

include 'includes/header.php';
?>

<div class="container">
    <h2>Recipe Details: <?php echo htmlspecialchars($recipe_details['recipe_name']); ?></h2>

    <div id="recipe-details">
        <h3><?php echo htmlspecialchars($recipe_details['recipe_name']); ?></h3>
        <p><strong>Prep Time:</strong> <?php echo htmlspecialchars($recipe_details['prep_time']); ?></p>
        <p><strong>Cook Time:</strong> <?php echo htmlspecialchars($recipe_details['cook_time']); ?></p>
        <p><strong>Total Time:</strong> <?php echo htmlspecialchars($recipe_details['total_time']); ?></p>
        <p><strong>Servings:</strong> <?php echo htmlspecialchars($recipe_details['servings']); ?></p>
        <p><strong>Yield:</strong> <?php echo htmlspecialchars($recipe_details['yield']); ?></p>
        <p><strong>Ingredients:</strong> <?php echo nl2br(htmlspecialchars($recipe_details['ingredients'])); ?></p>
        <p><strong>Directions:</strong> <?php echo nl2br(htmlspecialchars($recipe_details['directions'])); ?></p>
        <p><strong>Rating:</strong> <?php echo htmlspecialchars($recipe_details['rating']); ?></p>
        <p><strong>URL:</strong> <a href="<?php echo htmlspecialchars($recipe_details['url']); ?>" target="_blank">View Recipe</a></p>
        <p><strong>Cuisine Path:</strong> <?php echo htmlspecialchars($recipe_details['cuisine_path']); ?></p>
        <p><strong>Nutrition:</strong> <?php echo htmlspecialchars($recipe_details['nutrition']); ?></p>
        <p><strong>Timing:</strong> <?php echo htmlspecialchars($recipe_details['timing']); ?></p>
        <p><strong>Image:</strong> <img src="<?php echo htmlspecialchars($recipe_details['img_src']); ?>" alt="Recipe Image" /></p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
