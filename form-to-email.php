<?php



$name = $_POST['name'];

$visitor_email = $_POST['email'];

$contact = $_POST['phone'];

$city = $_POST['city'];

$number = $_POST['numberpax'];

$message = $_POST['message'];

//Validate first

if(empty($name)||empty($contact)) 

{

    echo "Name and contact are mandatory!";

    exit;

}



if(IsInjected($visitor_email))

{

    echo "Bad email value!";

    exit;

}

if(!is_numeric($contact)) 

{

     echo "Please enter a Valid Mobile Number!";

    exit;

} 



$email_from = " u301685449@srv300.main-hosting.eu ";//<== update the email address

$email_subject = "Enquiry from Infinite Trails (Google Ads)";

$email_body = "User Name: " .$name."\n".   

			  "Email: " .$visitor_email."\n" .

			  "Contact: " .$contact."\n" .

			   "City: " .$city."\n" .

			   "Number of persons: " .$number."\n" .

			  "Message: " .$message."\n";

    

$to = " info@infinitetrails.in ";//<== update the email address 

$headers = "From: $email_from \r\n";

$headers = "Bcc: info.infinitetrails@gmail.com \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!

mail($to,$email_subject,$email_body,$headers);

//done. redirect to thank-you page.

header('Location: thankyou.html');





// Function to validate against any email injection attempts

function IsInjected($str)

{

  $injections = array('(\n+)',

              '(\r+)',

              '(\t+)',

              '(%0A+)',

              '(%0D+)',

              '(%08+)',

              '(%09+)'

              );

  $inject = join('|', $injections);

  $inject = "/$inject/i";

  if(preg_match($inject,$str))

    {

    return true;

  }

  else

    {

    return false;

  }

}

   

?> 