<?php 
// if(isset($_POST['submit'])){
//     $to = "colincampbelldesigns@outlook.com"; // this is your Email address
//     $from = $_POST['email']; // this is the sender's Email address
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $name . "wrote the following: "  . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     // You cannot use header and echo together. It's one or the other.
//     }

   
// /*
//  *  CONFIGURE EVERYTHING HERE
//  */

// an email address that will be in the From field of the email.
$from = 'Contact form of porteosselfloadingmotorcycleramp.co.uk';

// an email address that will receive the email with the output of the form
$sendTo = 'sales@accessneeds.co.uk';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); 

// message that will be displayed when everything is OK :)
$okMessage ='Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "You have a new message from your contact form  ";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


if ($responseArray['type'] == 'success') {
    // success redirect

    header('Location:  http://www.porteosselfloadingmotorcycleramp.co.uk/thankyou.html');
}
else {
    //error redirect
    header('Location: http://www.porteosselfloadingmotorcycleramp.co.uk/error.html');
}


?>
