<html>
    
    <head>
        <titile></titile>
    </head>
    <body>
    <?php
       $Name = $_REQUEST['name'];
       $Mail = $_REQUEST['mail'];
       $Message=$_REQUEST['message'];
       $to="zhmpostbox@live.cn";
       $subject = "Comment from myWeb";
        mail($to,$subject,$Message,"From:".$Mail);
        echo "recived email";
        ?>
        
        
    </body>
</html>