<html>
    
    <head>
        <titile></titile>
    </head>
    <body>
    <?php
       $Name = $_POST['name'];
       $Mail = $_POST['mail'];
       $Message=$_POST['message'];
       $to="zhmpostbox@live.cn";
       $subject = "Comment from myWeb";
        mail($to,$subject,$Message,"From:".$Mail);
        echo "recived email";
        ?>
        
        
    </body>
</html>