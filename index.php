<?php
session_start();

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $myusername= $_POST['username'];
    $_SESSION['user']= $myusername;
    $time = time();
   $_SESSION['timeout'] =  $time;
  
  header("location:welcome.php");
}
?>

<html>
      <head>
    <style>
        
        form{
            text-align: center;
        }
        
        input{
           
            font-weight: bolder;
        }
        
        #name{
            border: 2px dotted black;
             height: 50px;  
            padding: 20px;
            margin: 20px;
        }
        
        
        </style>
    
    </head>
<body>
    
    <form action="" method="post">
    
  <input id="name" type="text" name="username"><br>
    <h3><input type="submit" value="login"></h3>
        
    
    </form>
    
    
    </body>


</html>