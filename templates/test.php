<?php
include_once "../init.php";

// User login checker
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
    exit();
}

// Fetch all categories for the logged-in user
$categories = $getFromC->getAllCategories($_SESSION['UserId']);

// Print categories
foreach ($categories as $category) {
    echo $category->CategoryName . "<br>";
}
?>
