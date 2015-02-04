<html>
    
    <head>
        <titile>recived email</titile>
    </head>
    <body>
    <?php
       $Name = $_POST['name'];
       $Mail = $_POST['mail'];
       $Message=$_POST['message'];
       $to= 'zhmpostbox@live.cn';
       $subject = 'Comment from myWeb';
        mail($to.$subject,$Message);
       
        ?>
        
        
    </body>
</html>