<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    class ManagerMail extends Utilisateur{
        public function sendMail1($userEmail, $subject,$emailMessage){

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
            try{
            
             $mail->SMTPDebug = 0;              
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;              
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.office365.com';                      
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = '-';                     
            $mail->Password   = '';                               
            $mail->SMTPSecure = 'startTLS';      
            $mail->Port       = 587;                                   
            $mail->setFrom('abd.zahaf@outlook.com','secu');
            $mail->addAddress($userEmail);                   
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $emailMessage;
            $mail->send();
            
            } 
            catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }

?>