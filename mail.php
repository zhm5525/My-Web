<html>
    
    <head>
        <titile></titile>
    </head>
    <body>
         <?php
          $Name = $_GET['name'];
       $Mail = $_GET['mail'];
       $Message=$_GET['message'];
       $to="zhmpostbox@live.cn";
       $subject = "Comment from myWeb";
        mail($to,$subject,$Message,"From:".$Mail);
        echo "recived email";
 ?>
    </body>
</html>