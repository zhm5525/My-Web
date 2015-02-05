<html>
    
    <head>
        <titile>recived email</titile>
    </head>
    <body>
    <?php
       $Name = $_GET['name'];
       $Mail = $_GET['mail'];
       $Message=$_GET['message'];
       $to= 'zhmpostbox@live.cn';
       $subject = 'Comment from myWeb';
        mail($to.$subject,$Message);
       
        ?>
        
        
    </body>
</html>