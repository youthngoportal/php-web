<?php
    /*
  Author: Shahid Shaikh
  Blog  : http://codeforgeek.com
    */
    require_once('PHPMailerAutoload.php');
    function sendmail($to,$subject,$message,$name)
    {
                  $mail             = new PHPMailer();
                  $body             = $message;
                  $mail->IsSMTP();
                  $mail->Host       = "smtp.gmail.com";                  
                  $mail->SMTPAuth   = true;
                  $mail->Host       = "smtp.gmail.com";
                  $mail->Port       = 587;
                  $mail->Username   = "youthngoportal@gmail.com";
                  $mail->Password   = "nirav123.";
                  $mail->SMTPSecure = 'tls';
                  $mail->SetFrom('youthngoportal@gmail.com', 'Youth ngo portal');
                  $mail->AddReplyTo("youthngoportal@gmail.com","Youth ngo portal");
                  $mail->Subject    = $subject;
                  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
                  $mail->MsgHTML($body);
                  $address = $to;
                  $mail->AddAddress($address, $name);
                  if(!$mail->Send()) {
                      return 0;
                  } else {
                        return 1;
                  }
    }
?>