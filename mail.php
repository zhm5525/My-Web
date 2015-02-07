<html>
    
    <head>
        <titile></titile>
    </head>
    <body>
    <?php
             $from_name ="Mahendra";
  $from_mail = "xxxx@gmail.com";
  $to = "zhmpostbox@live.cn";
  $subject = "Mahendra's Test Mail";
  $mail_body = "This is email test";
  $message = $mail_body ;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
  $headers .= "From: ".$from_name." <".$from_mail.">\r\n";
  ob_start();
  $sendmail=mail($to,$subject,$message,$headers);

  if($sendmail)
  {
      echo "Send 123";
  }
  else
  {
      echo "Not Send 123";  
   }
        ?>
        
        
    </body>
</html>