<?php

session_start();

include ('database_connection.php');

require_once('class.phpmailer.php');

require_once('class.smtp.php');








 





           //regular expression for email validation

        $email = $_POST['email'];
        $message = $_POST['message'];
   

  





    



                // Send the email:

              $message = $message;


            







              $mail = new PHPMailer(); // create a new object

              $mail->IsSMTP(); // enable SMTP

           //   $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only default=0 no error and no msgs.

              $mail->SMTPAuth = true; // authentication enabled

              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail

              $mail->Host = "smtp.gmail.com";

              $mail->Port = 465; // or 587 or 465

              $mail->IsHTML(true);

              $mail->Username = "infotech.cachebuffer@gmail.com";

              $mail->Password = "anilkumar@9892";

              $mail->SetFrom("infotech.cachebuffer@gmail.com");

              $mail->Subject = "Atma contact Message";

              $mail->Body = $message;

              $mail->AddAddress($email);

              $mail->Send();

         /*     if(!$mail->Send())

              {

                echo "Mailer Error: " . $mail->ErrorInfo;

              }

               else

                {

                    echo "Message has been sent";

                }



         */























                // Flush the buffered output.





                // Finish the page:

                /*echo '<div class="alert alert-dismissable alert-success">

                <button type="button" class="close" data-dismiss="alert">×</button>Thank you for

                registering! A confirmation email

                has been sent to '.$email.' Also check your Spam folder for the mail. And Please click on the Activation Link to Activate your account </div>';*/
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Message Sent Successfully .')
    window.location.href='tracking.php';
    </SCRIPT>");
                 





  

    mysqli_close($conn);//Close the DB Connection



// End of the main Submit conditional.







?>




