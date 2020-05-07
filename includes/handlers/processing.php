<?php

    if(isset($_POST['button-send'])){
        $contactNameInfo = $_POST['contactName'];
        $contactEmailInfo = $_POST['contactEmail'];
        $textField = $_POST['contactField'];

        //PHP will not send an email to a gmail address
        $mailTo = "daniel@danielgrass.com";
        $headers = "From: " . $contactEmailInfo;
        $txt = "You have received an e-mail from " . $contactNameInfo . " .\n\n" . $textField;

        mail($mailTo, $txt, $headers);
        header("Location: contact-us.php?success");
    }
  
?>
