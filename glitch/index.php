<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>Glitch</h1>
  </div>
  <!-- <p class='msg'>Welcome back</p> -->
  <div class='form'>
    <form action="" method="POST">
  <input type="text" placeholder='email' class='text' id='username' name='email' required><br>
  <input type="password" placeholder='••••••••••••••' class='password' name='pass' required><br>
  <!-- <a href="#" class='btn-login' id='do-login' >Login</a> -->
  <button type="submit" class='btn-login' id='do-login' name='submit'>Login</button>
  <a href="#" class='forgot'>Forgot?</a>
    </form>



    <!-- PHP CODE FOR LOGIN VALIDATION -->
    <?php
      if (isset($_POST['submit'])) {
        require('essentials/_conn.php');

        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $query="SELECT * from login where email='$email' and pass='$pass' and type ='0'";
        $res=mysqli_query($conn, $query);

        if ($res) {
          if(mysqli_num_rows($res)>0)
          {
			      echo 'Login Success';
            $row = mysqli_fetch_assoc($res);
            $name=$row['name'];
            $id=$row['id'];
            $type=$row['type'];
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$name;
            $_SESSION['id']=$id;
            $_SESSION['type']= $type;

            header("location:home.php");
          }
		    else
			      echo 'Login failed';
        }
		}
    ?>

  </div>
</section>
<!-- partial -->
  

</body>
</html>
