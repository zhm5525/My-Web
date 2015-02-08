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
       $headers = 'From: youremail@example.com' . "\r\n" .
            'Reply-To: youremail@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        if(mail($to,$subject,$Message,$headers)){
            echo "recived email";}
        ?>
        
        
    </body>
</html>