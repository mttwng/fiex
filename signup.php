<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "mattysoccer@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "signup_done.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY
$body = "Name: ".$_POST['Name']." \n";
$body .= "Email: ".$_POST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>