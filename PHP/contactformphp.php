<?php   // if (recaptcha) {
        
        $name =$_POST['Name'];
        $email = $_POST ['Email'];
        $sub = $_POST ['Subject'];
        $mes = $_POST['Message'];
        
    
        $to = "pattyvalentines@ritxykun.com";
        $subject = "T:".$sub.".\r\n";
        $messages= "From member  ".$name.",\r\n";

        $messages.="message is: " .$mes."\r\n";
        $messages.="Thank you for contact Patty Valantine's\r\n"; 
        $messages.="Your Patty Valantine's Team \r\n";
        
        // From 
        $header = "From:pattysend@ritxykun.com\r\n";
        
        mail($to,$subject,$messages,$header); 
        header('refresh:.5;url="http://ritxykun.com/50WEB/contact.php');
        echo "thanks for contacting us";
        exit();
        
        
    ?>