<?php

// didn't work once uploaded to godaddy but worked on my end..
//if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) !== 'xmlhttprequest')
//	exit('<h1>Not a valid Ajax request...</h1>');

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
	exit('<h1>Not a valid Ajax request...</h1>');

if (!empty($_POST)) {

	$name = trim($_POST['fname']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);

	$errors = array();

	if ($name == null)
		$errors['name'] = 'The name field is required';
	else 
		$errors['name'] = null;

	if ($email == '')
		$errors['email'] = 'The email field is required';
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		$errors['email'] = $email . ' is not a valid email address';
	else
		$errors['email'] = null;

	if ($phone == '')
		$errors['phone'] = 'The phone field is required';
	else if (!preg_match('/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/', $phone))
		$errors['phone'] = $phone . ' is not in the correct phone number format of: 555-555-5555';
	else
		$errors['phone'] = null;

	if ($errors['name'] !== null || $errors['email'] !== null || $errors['phone'] !== null) {

		$response['success'] = false;
		$response['nameError'] = $errors['name'];
		$response['emailError'] = $errors['email'];
		$response['phoneError'] = $errors['phone'];

		header('Content-type: application/json; charset=utf-8');
        echo json_encode($response);

	} else {

		$response['success'] = true;
		$response['message'] = '<div class="success">The form has been submitted ' . $name . '</div><script>$(".webinar").hide(2000)</script>';

		//these headers didn't work in godaddy...
		//$headers = 'MIME-Version: 1.0' . '\r\n';
		//$headers .= 'Content-type:text/html;charset=UTF-8' . '\r\n';
		//$headers .= 'From: info@signupandmakemoney.com' . '\r\n';

		$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Admin <info@signupandmakemoney.com>' . "\r\n";

		$toEmail = 'info@signupandmakemoney.com';
		$subject = 'You have a new lead from the webinar page processed on ' . date('Y/m/d');
		$body = '<p>Lead details are below:</p>

			<ul>
				<li>Name: '.$name.'</li>
				<li>Email: '.$email.'</li>
				<li>Phone: '.$phone.'</li>
			</ul>

			<p>Contact them ASAP!!!</p>';

		mail($toEmail, $subject, $body, $headers);

		header('Content-type: application/json; charset=utf-8');
        echo json_encode($response);
	}
}

?>