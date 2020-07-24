<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Email: <input type="type" name="email" id=""><br /><br />
            Subject: <input type="text" name="subject" id=""><br /><br />
            Message:<br />
            <textarea name="message" id="" cols="40" rows="15"></textarea><br /><br />
            <input type="submit" name="esubmit">
        </form>
    </body>
</html>

<?php

    if(isset($_POST['esubmit'])){
        $to = "shahzaib-zaib@hotmail.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $from = $_POST['email'];;
        $headers = "From : $from";
    
        $headers = implode("\r\n", $headers);
    
        if(mail($to, $subject, $message, $headers)){
            echo "Mail Sent.";
        }else{
            echo "Mail Failed";
        }
    }

?>