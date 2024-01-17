<html>
    <body>
        <?php
            // if(!isset($_POST['submit'])){
            //     $errors[] =  "Hey my friend, you need to press the send message button!";
            // }
            $name = $_POST['name'];
            $visitor_email = $_POST['email'];
            $message = $_POST['message'];

            if(empty($name)){
                $errors[] =  "Please tell me your name :)";
                exit;
            }else if ( empty($visitor_email)){
                $errors[] =  "Please input your email, my friend. I need your contact to reply :(";
                exit;
            }else if (empty($message)){
                $errors[] =  "Feel free to say something to me :)";
                exit;
            }

            if (!empty($errors)) {
                $allErrors = join('<br/>', $errors);
                $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
            }else{
                $email_from = 'fionaloy@protonmail.com';
                $email_subject = "New Message from Fiona's github.io";
                $email_body = "You have received a new message from $name.\n".
                                "email: $visitor_email\n".
                                "Here is the message:\n $message";
                if($_POST["message"]) {
                    $to = "fionaloy@protonmail.com";
                    $headers = "From: $email_from \r\n";
                    $headers .= "Reply-To: $visitor_email \r\n";
        
                    mail($to,$email_subject,$email_body,$headers);
                }
            }
        ?>
    </body>
</html>