<?php

include "backend.php";

$data = json_decode($json_response, true);
$question = $data["question"];
$options = $data["options"];
$page_header = "Welcome to Quiz Program";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<h2><?php echo $page_header ?></h2>
	<a href="login.php">Login</a>
	<a href="register.php">Register</a>
</body>
</html>