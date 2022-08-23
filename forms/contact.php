<?php

//   $receiving_email_address = 'elgetenz@gmail.com';

//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

  

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
      $to = "elgetenz@gmail.com"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $name = $_POST['name'];

      $subject = "Form submission";
      $subject2 = "Copy of your form submission";
      $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
      $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
?>
