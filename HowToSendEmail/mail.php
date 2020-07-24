<?php

    $to = "shahzaib-zaib@hotmail.com";
    $subject = "Test mail";
    $message = "Hello! This is a simple email message.";
    //$from = "shahzaibux@gmail.com";
    $headers = [    "MIME-Version: 1.0",
                    "Content-type: text/plain; charset=utf-8",
                    "From : shahzaibux@gmail.com",
                    "Cc : shahzaibali@gmail.com",
                    "Bcc : abc@gmail.com"
                ];

    $headers = implode("\r\n", $headers);

    if(mail($to, $subject, $message, $headers)){
        echo "Mail Sent.";
    }else{
        echo "Mail Failed";
    }

?>