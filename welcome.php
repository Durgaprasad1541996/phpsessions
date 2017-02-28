  
    <?php 
 
     session_start();
    if($_SERVER["REQUEST_METHOD"]== "POST")
{
   
    $timee =(strtotime("now") )- $_SESSION['timeout'] ;
    $_SESSION['endtime']= $timee;
    header("location:logout.php");
    
}
    ?>



<html>
      <head>
    <style>
        body{
              text-align: center;
        }
       h1{
          
           font-weight: bolder;
        }
        
        input{
           padding: 10px;
            font-weight: bolder;
        }
        
      
        
        
        </style>
    
    </head>
<body>
  <form action="" method="post">
    <h1><?php  echo "welcome  ".$_SESSION['user']; ?></h1><br>
    <input type="submit" value="logout">
        
</form>
    </body>
</html>