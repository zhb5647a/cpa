<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    class ManagerMail extends Utilisateur{
        public function sendMail($userEmail, $subject,$emailMessage){

        require 'vendor/autoload.php';
        
            try{
            $mail = new PHPMailer(true);
            // $mail->SMTPDebug = 0;              
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;              
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.office365.com';                      
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'abd.zahaf@outlook.com';                     
            $mail->Password   = 'Zahe1979';                               
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