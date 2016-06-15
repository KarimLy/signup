<?php

// didn't work once uploaded to godaddy but worked on my virtual host
//if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) !== 'xmlhttprequest')
//	exit('<h1>Not a valid Ajax request...</h1>');

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
	exit('<h1>Not a valid Ajax request...</h1>');

session_start();

if (!empty($_POST)) {

	$name = trim($_POST['fname']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$robot = trim($_POST['norobot']);

	$errors = array();

	if ($name == null)
		$errors['name'] = 'The name field is required';
	else if ($name == 'Name')
		$errors['name'] = 'The name field is required';
	else 
		$errors['name'] = null;

	if ($email == '')
		$errors['email'] = 'The email field is required';
	else if ($email == 'Email')
		$errors['email'] = 'The email field is required';
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		$errors['email'] = $email . ' is not a valid email address';
	else
		$errors['email'] = null;

	if ($phone == '')
		$errors['phone'] = 'The phone field is required';
	else if ($phone == 'Phone')
		$errors['phone'] = 'The phone field is required';
	else if (!preg_match('/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/', $phone))
		$errors['phone'] = $phone . ' is not in the correct phone format';
	else
		$errors['phone'] = null;

	if ($robot == '')
      $errors['robot'] = 'The captcha field is required';
    else if ($robot == 'Enter Captcha')
      $errors['robot'] = 'The captcha field is required';
    else if (md5($robot) !== $_SESSION['randomnr2'])
      $errors['robot'] = 'The captcha field was incorrect';
    else
      $errors['robot'] = null;

	if ($errors['name'] !== null || $errors['email'] !== null || $errors['phone'] !== null || $errors['robot'] !== null) {

		$response['success'] = false;
		$response['nameError'] = $errors['name'];
		$response['emailError'] = $errors['email'];
		$response['phoneError'] = $errors['phone'];
		$response['robotError'] = $errors['robot'];

		header('Content-type: application/json; charset=utf-8');
        	echo json_encode($response);

	} else {

		$response['success'] = true;
		$response['message'] = '<div class="success">We will be in contact with you shortly ' 
		. $name . '</div><script>$(".webinar").hide(2000)</script>';

		//this header works in godaddy....
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
