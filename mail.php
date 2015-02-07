<html>
    
    <head>
        <titile></titile>
    </head>
    <body>
         <?php
        /*
   
       $Name = $_REQUEST['name'];
       $Mail = $_REQUEST['mail'];
       $Message=$_REQUEST['message'];
       $to="zhmpostbox@live.cn";
       $subject = "Comment from myWeb";
        mail($to,$subject,$Message,"From:".$Mail);
        echo "recived email";
       
      */  
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
      echo "Send";
  }
  else
  {
      echo "Not Send";  
   }
 ?>
    </body>
</html>