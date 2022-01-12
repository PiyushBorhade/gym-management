<?php

include "config.php";

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="web.css">
        </link>
    <title>registration!</title>
    <h2 class="h">welcome to web!</h2>
    </head>
        <body id="b">
            
            <div id="d">
               
                <form action="reg.php" method="post" align="center"> 
                 <center>
            <img src="unique.jpeg" class="img"> </img>   
              </center>
                <b>
                    <label>NAME:</label>
                <input type="text" name="name" id="form" placeholder="enter your name" required></input><br><br>
                <b>
                 <label>EMAIL:</label>
                <input type="email" name="email" id="form" placeholder="eg:example@abc.com" required></input><br><br>
            <b>
             <label>PASSWORD:</label>
                <input type="password" name="pass" id="form" placeholder="enter your password" required></input><br><br>
                <b>
                <label>CONFIRM PASSWORD:</label>
                <input type="password" name="cpass" id="form" placeholder="confirm your password" required></input><br><br>

<input type="submit" name="reg" id="button" value="Sign-Up"></input><br>

<a href="login.php"><input type="button" name="back" id="button" value="Back to Log-in"></input><br>

                
                </form>
<?php

if(isset($_POST['reg']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    
    if($pass == $cpass){

    $query= "   select * from user where email='$email'";
        $query_check = mysqli_query($con,$query);
        
        if($query_check){
            
            if(mysqli_num_rows($query_check)> 0){
                
                echo "
                <script>
                alert(' email already exists.');
                window.location.href='login.php'; 
                </script>
                ";
                
            }else{
                
$insertion= "insert into user values('$name','$email','$pass')";
                
            $run= mysqli_query($con,$insertion);

                if($run){
                    
                    echo "
                <script>
                alert(' you are successfully registered.');
                window.location.href='home.php'; 
                </script>
                ";
                    
                }else{
                    
                echo "
                <script>
                alert(' connection failed!!');
                window.location.href='reg.php'; 
                </script>
                ";
                }
            }
            
        }else
        {
                                echo "
                <script>
                alert(' database error!');
                window.location.href='reg.php'; 
                </script>
                ";
        }
        
    }else{
                            echo "
                <script>
                alert('Password and Confirmed Password does not match!');
                window.location.href='reg.php'; 
                </script>
                ";
    }
    
}else
{

    
    
}

?>




            </div>
    </body>
</html>