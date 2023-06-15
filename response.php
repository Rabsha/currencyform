<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST['submit']))
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'info@clearemit.com';                     //SMTP username
            $mail->Password   = 'Whyisthat@2023';                       //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('info@clearemit.com', 'Mailer');
            $mail->addAddress('rabshasiddiqui@gmail.com', 'Rabsha Shakeel');     //Add a recipien
        
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body    = "
            <div style='font-family: arial; text-align: justify; border: 1px solid #d3d3d366; border-radius: 10px;'>
                <table style='width:100%; '>
                    <tr>
                        <td>
                            <div style='border-radius: 10px 10px 0px 0px; align-item: center; background: #3c76c4; padding: 40px 0;text-align:center;'>
                                <img src='https://clearemit.com/wp-content/uploads/2023/01/Black-logo-no-background.png' width='150px'; />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class='text-work' style='color: black; padding: 0px 15px;'>
                                <br>
                                <br>
                                    Rabsha
                                <br>
                                <br>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            ";
        
            $mail->send();
            header("Location:thankyou.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>