<html>
    
    <head>
        <titile></titile>
    </head>
    <body>
    <?php
       //$Name = $_GET['name'];
       //$Mail = $_GET['mail'];
       //$Message=$_GET['message'];
        $Message="hello";
       $to="zhmpostbox@live.cn";
       $subject = "Comment from myWeb";
       $headers = "From: someone@your-website.com"
        mail($to,$subject,$Message,$headers);
        echo "recived email";
        ?>
        
        
    </body>
</html>