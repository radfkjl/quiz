<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $quizdate = $_POST["quizdate"];
    $programmingLanguage = $_POST["programming_language"];
    $fruits = isset($_POST["fruits"]) ? $_POST["fruits"] : [];
    $country = $_POST["country"];
    $code = $_POST["code"];

    // Display form data
    echo "<h2>Gained Information:</h2>";
    echo "<p>First Name: $firstname</p>";
    echo "<p>Last Name: $lastname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Quiz Date: $quizdate</p>";
    echo "<p>Programming Language: $programmingLanguage</p>";

    if (!empty($fruits)) {
        echo "<p>Favorite Fruits: " . implode(", ", $fruits) . "</p>";
    }

    echo "<p>Country: $country</p>";
    echo "<p>HTML/CSS Code:</p>";
    echo "<pre>$code</pre>";
}
?>
