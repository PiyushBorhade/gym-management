<?php

include "config.php";

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="web.css">
        </link>
    <title>LOGIN-IN</title>
    <h2 class="h">WELCOME TO UNIQUE GYM</h2>
    </head>
        <body id="b">
            
            <div id="d">
               
                <form action="login.php" method="post" align="center"> 
                 <center>
            <img src="images.png" class="img"> </img>   
              </center>
                <b>
                    <br><br>
                 <label>EMAIL:</label>
                <input type="email" name="email" id="form" placeholder="eg:example@abc.com" required></input><br><br>
            <b>
             <label>PASSWORD:</label>
                <input type="password" name="pass" id="form" placeholder="enter your password" required></input><br><br>

<input type="submit" name="login" id="button" value="Log-In"></input><br>

<a href="reg.php"><input type="button" name="reg" id="button" value="Registration"></input><br>
            
            <a href="index.php"><input type="button" name="index" id="button" value="Back to Home"></input><br>

                
                </form>
<?php

if(isset($_POST['login']))
{
    
$email = $_POST['email'];
    $pass = $_POST['pass'];
    
$query = " select * from user where email ='$email' AND pas='$pass' ";

$check = mysqli_query($con,$query);

    if($check){
        
        if(mysqli_num_rows($check) > 0)
        {
            
            echo "
            <script>
            alert('you are successfully logged in!');
            window.location.href='home.php';
            </script>
            ";
            
        }else{
          
             echo "
            <script>
            alert('email or password not correct!');
            window.location.href='login.php';
            </script>
            ";
        }
        
        
    }else{
        
         echo "
            <script>
            alert('database error!');
            window.location.href='login.php';
            </script>
            ";
    }
    
    
}else{
    
    }

?>



            </div>
    </body>
</html>