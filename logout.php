

<html>
    <head>
    <style>
        
        h1{
            text-align: center;
        }
        
        
        </style>
    
    </head>
<body>
    <h1><?php
  session_start();
echo " you have browsed for ".date('i:s',$_SESSION['endtime'])."s";
  session_destroy();

?></h1><br>
    
    <h1><a href="index.php">login</a></h1>
    <a></a>
    
    </body>
</html>


