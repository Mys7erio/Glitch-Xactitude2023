<!DOCTYPE html>

<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!= true) {
        header('location: ../../index.php');
        exit;
    }

?>

<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="home.css" />
</head>
<body>
<div class="container">
  <section id="content">
    <form action="" method="GET">
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="User ID" name="user" value="admin" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" name="password" required="" id="password" />
      </div>
      <div>
        <button type="submit" name="login" id="btn">Login</button>
      </div>
    </form>
  </section>
</div>
<?php
        if (isset($_GET['login'])) {
            require('../../essentials/_conn.php');
            $user=$_GET['user'];
            $pass=$_GET['password'];
            
            $sql="SELECT * from level_login where user= '$user' and password= '$pass'";
            $res=mysqli_query($conn, $sql);

            if ($res) {
                if(mysqli_num_rows($res)>0)
                {
                  $row = mysqli_fetch_assoc($res);
                  $id=$row['id'];
                  $_SESSION['level_loggedin']=true;
                  header("location:home.php?user_login=".$id);
                }
                  else
                        echo '<script>alert("Login failed");</script>';
            }
        }
        

    ?>
</body>
</html>