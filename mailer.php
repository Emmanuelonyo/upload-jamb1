<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $pcode = trim($_POST["Profile Code"]);
        $regno = trim($_POST["Registration No."]);
		$phoneno = trim($_POST["Phone Number."]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($cont_subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "emmanuelonyo34@gmail.com";

        // Set the email subject.
        $subject = "New Result Upload From $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Profile: $pcode\n\n";
        $email_content .= "Jamb Reg No.: $regno\n\n";
        $email_content .= "Phone Number:\n$phoneno\n";

        // Build the email headers.
        $email_headers = "From: $name <$phoneno>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Your Result has been sent and will be Updated within 24 hours.";
			echo "Please Note that we only proccess Paid Transactions.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
