<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Glitch 2023</title>

    <!-- Linking Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="home.css">

    <style>
        img#logo{
            width: 30%;
            margin-left: 35%;
            margin-top: 50px; 
        }

        .btn {
    background-color: var(--marine-blue);
    color: var(--white);
    border: none;
    border-radius: 8px;
    width: 25%;
    height: 60px;
    font-family: Michroma;
    text-align: center;
    font-size: 20px;
    transition: .3s ease;
    cursor: pointer;
    margin-left: 15%;
    margin-bottom: 5%;
    padding-top: 1.4%;
    text-decoration: none;
}
    </style>
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
            <img src="img/glitch.png" alt="Glitch" id="logo">
            <h2 class="head2">A Cyber Security Inter-Collegiate Event</h2>
        </div>
        <div class="flex">
            <a href="challenge-1.php" target="_blank" rel="noopener noreferrer" class="btn">Level 1</a>
            <a href="challenge-2.php" target="_blank" rel="noopener noreferrer" class="btn">Level 2</a>
        </div>
        <div class="flex">
            <a href="challenge-3.php" target="_blank" rel="noopener noreferrer" class="btn">Level 3</a>
            <a href="challenge-4.php" target="_blank" rel="noopener noreferrer" class="btn">Level 4</a>
        </div>
        <div class="flex">
            <a href="challenge-5.php" target="_blank" rel="noopener noreferrer" class="btn">Level 5</a>
            <a href="challenge-6.php" target="_blank" rel="noopener noreferrer" class="btn">Level 6</a>
        </div>
    </div>


</body>
</html>