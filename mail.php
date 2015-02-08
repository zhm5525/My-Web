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
       $headers = "From: someone@your-website.com"
        mail($to,$subject,$Message,$headers);
        echo "recived email";
        ?>
        
        
    </body>
</html>