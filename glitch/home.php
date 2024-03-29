<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Glitch 2023</title>

    <!-- Linking Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">

</head>

<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: index.php');
        exit;
    }
?>


<body>

    <!-- Navbar (Shakir) -->
    <nav>
        <a href="/">
            <img src="assets/kjc-flag-latest.png" width="256px" height="64">
        </a>
        
        <div class="nav-links">
            <a href="home.php" class="nav-item active">Home</a>
            <a href="/about" class="nav-item">About</a>
            <a href="/contact-us" class="nav-item">Contact Us</a>
        </div>
    </nav>


    <div>
        <div class="home">
            <h1 class="head1">GLITCH</h1>
            <h2 class="head2">A Cyber Security Inter-Collegiate Event</h2>
        </div>
        <div class="flex">
            <button class="btn"><a href="challenge-1.php" target="_blank" rel="noopener noreferrer">Level 1</a></button>
            <button class="btn"><a href="challenge-2.php" target="_blank" rel="noopener noreferrer">Level 2</a></button>
        </div>
        <div class="flex">
            <button class="btn"><a href="challenge-3.php" target="_blank" rel="noopener noreferrer">Level 3</a></button>
            <button class="btn"><a href="challenge-4.php" target="_blank" rel="noopener noreferrer">Level 4</a></button>
        </div>
        <div class="flex">
            <button class="btn"><a href="challenge-5.php" target="_blank" rel="noopener noreferrer">Level 5</a></button>
            <button class="btn"><a href="challenge-6.php" target="_blank" rel="noopener noreferrer">Level 6</a></button>
        </div>
    </div>


</body>
</html>