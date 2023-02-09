<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="guidelines.css">

    <!-- Linking Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">

    <title>Score</title>

    <style>
        .card-header{
            width: 60%;
            margin-left: 20%; 
            margin-top: 2%;
        }
        .flex-inline{
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .text{
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1 class="michroma">Score</h1>
    <div class="card-header flex-inline">
        <span class="userid">ID</span>
        <span class="name">Name</span>
        <span class="score">Score</span>
    </div>

    <?php
    include_once 'essentials/_conn.php';
    // find the total score of each unique user from score table
    $sql = "SELECT uid, name, SUM(score) AS total_score FROM score GROUP BY uid ORDER BY total_score DESC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<div class="card-header flex-inline">
        <span class="userid text">'.$row["uid"].'</span>
        <span class="name text">'.$row["name"].'</span>
        <span class="score text">'.$row["total_score"].'</span>
        </div>';
    }

    ?>
</body>
</html>