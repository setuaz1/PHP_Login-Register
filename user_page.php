<?php
echo "hello from temp branch";
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: #fff;">

    <div class="box">
        <h1>Welcome, <?= $_SESSION['name']; ?><span></span></h1>
        <p>this is an <span>user</span></p>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>

</body>

</html>