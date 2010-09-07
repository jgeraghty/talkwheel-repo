
<?php
if(isset($_POST['submit'])) {

$to = "kate@katecarmack.com";
$subject = $_POST['subject'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: <' . $_POST['email'] . '>' . "\r\n";
$headersConfirm = 'From: <kate@katecarmack.com>' . "\r\n";

 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
$bodyConfirm = "Thank you for contacting Kate Carmack. Your email has been received and I will get back to you shortly! \n\nThank you,\nKate Carmack";
 
echo "Data has been submitted to Kate Carmack!";
mail($to, $subject, $body, $headers);

mail($email_field, $subject, $bodyConfirm, $headersConfirm);

} else {

echo "I'm sorry there was an error processing your request!";

}
?>
