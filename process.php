<?php

    $to = "nouailmed03@gmail.com";
    $from = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $Service = $_REQUEST['Service'];
    $Secteur = $_REQUEST['Secteur'];
    $number = $_REQUEST['number'];

    $headers = "From: $from";
  

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "subject";
    $fields{"message"} = "message";
    $fields{"Service"} = "Service";    
    $fields{"Secteur"} = "Secteur";
    $fields{"number"} = "number";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
