<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: index.php');
        exit;
    }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Glitch | Challenge #4</title>
    
    <!-- Linking Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:wght@200;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

        <!-- Navbar (Shakir) -->
        <nav>
            <a href="/">
                <img src="assets/kjc-flag-latest.png" class="nav-logo">
            </a>
            
            <div class="nav-links">
                <a href="home.php" class="nav-item">Home</a>
                <a href="/about" class="nav-item">About</a>
                <a href="/contact-us" class="nav-item">Contact Us</a>
            </div>
        </nav>
    


            <!-- Challenge #1 (Shakir)-->
    <!-- Main axis will be vertical-->
    <div id="challenge-1" class="challenge-page">

        <!--This will hold the actual challenge and MCQs-->
        <div class="challenge-container">

            <!-- Main axis will be horizontal-->
            <!--Actual Challenge-->
            <div class="challenge-section">
                <h1 class="michroma">&nbsp; <b>#4 </b> URL Parameter</h1>
                <p style="text-align: center;">
                With a simple tweak, I can change your fate,
                In the address bar, I'm not hard to locate.
                I can make you buy, or give away your prize,
                You can block me, but I'll always rise.
                </p>

                <a href="levels/URL_Parameter/login.php">
                    <b>Can you help tony find it?</b>
                    <img src="assets/hyperlink.png">
                </a>


                <!-- HINT SECTION -->

                <form action="" method="post">
                    <h4 class="raleway">Need a hint? Marks will be deducted for every hint received</h4>
                    <button type="submit" class='btn-primary michroma' name='hint' id="hint">Get Hint</button>
                </form>
            <?php
                require('essentials/_conn.php');
                $uid=$_SESSION['id'];
                $name=$_SESSION['name'];
                $score=0;
                $used=null;
                    
                $hint_check="SELECT * FROM score where uid='$uid' and level='4' and type='3'";
                $hintcres=mysqli_query($conn, $hint_check);
                if($hintcres){
                    $num=mysqli_num_rows($hintcres);
                    if ($num>0) {
                        $hintsql="SELECT * from hints where level='4'";
                        $hintres=mysqli_query($conn, $hintsql);
                        $row = mysqli_fetch_assoc($hintres);
                            $hint=$row['hint'];
                            echo "<span class='hint'> $hint </span>";
                        }
                    }
                    
                       if (isset($_POST['hint'])) {
                            
                            $hint_check="SELECT * FROM score where uid='$uid' and level='4' and type='3'";
                            $hintcres=mysqli_query($conn, $hint_check);
                            if($hintcres){
                                $num=mysqli_num_rows($hintcres);
                                if ($num!=0) {
                                    echo "<script>alert('Only 1 hint is allowed in a level');</script>";
                                }
                                else{
                                    $hintsql="SELECT * from hints where level='4'";
                                    $hintres=mysqli_query($conn, $hintsql);
                                    $row = mysqli_fetch_assoc($hintres);
                                        $hint=$row['hint'];
                                        echo "<span class='hint'> $hint </span>";
                                        $used=1;
                                        $cnt=1;
                                        $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '4', '3', '$score')";
                                        $res=mysqli_query($conn, $sql);
                                }
                            }
                        }
                        
                ?>

            </div>

            <!--MCQs-->
            <div class="challenge-questions">
                <form action="" id="challenge-1" method="POST">
                    <div class="question">
                        <label>Input targeted in parameter pollution attack?</label>
                        <input type="text" name="c1q1" id='c1q1' required>
                    </div>
                    <div class="question">
                        <label>First step in mitigating a parameter pollution attack?</label>
                        <input type="text" name="c1q2" id='c1q2' required>
                    </div>
                    <div class="question">
                        <label>What is the port for FTP?</label>
                        <input type="text" name="c1q3" id='c1q3' required>
                    </div>
                    <div class="question">
                        <label>What is the port for FTP?</label>
                        <input type="text" name="c1q4" id='c1q4' required>
                    </div>
                    <div class="question">
                        <label>What is the port for FTP?</label>
                        <input type="text" name="c1q5" id='c1q5' required>
                    </div>
                    <button type="submit" class='btn-primary' id='do-login' name='mcq'>Submit</button>
                </form>
            </div>
        </div>


        <!--This will hold flag submission input-->
        <div class="flag-input">
            <h2 class="Raleway">Captured a flag? Enter below to submit it</h2>

            <form action="" id="flag-1" method="POST">
                <input type="text" name="flag-1" placeholder="&nbsp;Flag Format Glitch{b73bf7d3ba1a517644661bc4bcd85f9a}" required>
                <button type="submit" name="c1f" class="btn-primary">Submit</button> <br>
            </form>
        </div>
    </div>
        

<?php

    require('essentials/_conn.php');
   
    if (isset($_POST['mcq'])) {
    
        $q1= $_POST['c1q1'];
        $q2= $_POST['c1q2'];
        $q3= $_POST['c1q3'];
        $q4= $_POST['c1q4'];
        $q5= $_POST['c1q5'];
       

        // NEED TO REPLACE TEXT WITH ANSWEERS
        if ($q1=="text") {
            $score++;
        }
        if ($q2=="text") {
            $score++;
        }
        if ($q3=="text") {
            $score++;
        }
        if ($q4=="text") {
            $score++;
        }
        if ($q5=="text") {
            $score++;
        }

        $sql_check="SELECT * FROM score where uid='$uid' and level='4' and type='2'";
        $check_res=mysqli_query($conn, $sql_check);
        if($check_res){
            $num= mysqli_num_rows($check_res);
            if ($num!=0) {
                echo "<script>alert('Questions can be answered only once');</script>";
            }
            else{
                $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '4', '2', '$score')";
                $res=mysqli_query($conn, $sql);
                if ($res) {
                    echo "<script>alert('Answeers saved successfully');</script>";
                }
                else {
                    echo "<script>alert('Unable to store data');</script>";
                    
                }
            }
        }
       
    }


    // CHECKING FLAG SUBMISSIONS

    if (isset($_POST['c1f'])) {
        $flag=$_POST['flag-1'];

        $sql_check="SELECT * FROM score where uid='$uid' and level='4' and type='1'";
        $check_res=mysqli_query($conn, $sql_check);
        if($check_res){
            $num= mysqli_num_rows($check_res);
            if ($num!=0) {
                echo "<script>alert('Duplicate flag submissions are not allowed');</script>";
            }
            else{
                if ($flag=='flag{123}') {
                    $sql="INSERT into score (uid, name, level, type, score) values ('$uid', '$name', '4', '1', '2')";
                    $res=mysqli_query($conn, $sql);
                    echo "<script>alert('Congratulations! You cleared the level');</script>";
        
                }
                else{
                    echo "<script>alert('Incorrect flag! Try again.');</script>";
                }
            }
        }
        
    }


?>
    
</body>
</html>