<?php 

$field_name = $_POST['contact-name'];
$field_email = $_POST['contact-email'];
$field_message = $_POST['contact-message'];

$mail_to = 'thefilefoundry@gmail.com';
$subject = 'Message from file-foundry visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message."\n";

$headers = "From: $contact-name\r\n";
$headers .= "Reply-To: $contact-email\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if($mail_status) { ?>
	<script language="javascript" type="text/javascript" >
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
} else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to thefilefoundry@gmail.com');
		window.location = 'contact.html';
	</script>
<?php
}

?>