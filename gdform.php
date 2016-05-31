<?php

  if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
    exit('<h1>Not a valid Ajax request...</h1>');

  session_start();

  /* Don't need this anymore...
  $request_method = $_SERVER["REQUEST_METHOD"];

  if($request_method == "GET"){

    $query_vars = $_GET;

  } elseif ($request_method == "POST"){

    $query_vars = $_POST;

  }
  */

  if (!empty($_POST)) {

    $name = trim($_POST['first_name']);
    $email = trim($_POST['email']);
    $links = trim($_POST['links']);
    $questions = trim($_POST['questions']);
    $robot = trim($_POST['norobot']);

    $errors = array();

    if ($name == '')
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

    //links & questions are not required...
    if ($links == '')
      $links = 'None'; 
    if ($links == 'Referral links for us to look at')
      $links = 'None';

    if ($questions == '')
      $questions = 'None';
    if ($questions == 'Questions/Comments')
      $questions = 'None';

    if ($robot == '')
      $errors['robot'] = 'The captcha field is required';
    else if ($robot == 'Enter Captcha')
      $errors['robot'] = 'The captcha field is required';
    else if (md5($robot) !== $_SESSION['randomnr2'])
      $errors['robot'] = 'The captcha field was incorrect';
    else
      $errors['robot'] = null;

    if ($errors['name'] !== null || $errors['email'] !== null || $errors['robot'] !== null) {

      $response['success'] = false;
      $response['nameError'] = $errors['name'];
      $response['emailError'] = $errors['email'];
      $response['robotError'] = $errors['robot'];

      header('Content-type: application/json; charset=utf-8');
      echo json_encode($response);

    } else {

      $response['success'] = true;
      $response['message'] = '<div class="success">We will be in contact with you shortly ' 
      . $name . '</div><script>$("#contact_us").hide(2000)</script>';

      //this header works in godaddy....
      $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Admin <info@signupandmakemoney.com>' . "\r\n";

      $toEmail = 'info@signupandmakemoney.com';
      $subject = 'You have a new contact form inquiry submission processed on ' . date('Y/m/d');
      $body = '<p>Inquiry details are below:</p>

        <ul>
          <li>Name: '.$name.'</li>
          <li>Email: '.$email.'</li>
          <li>Links: '.$links.'</li>
          <li>Questions: '.$questions.'</li>
        </ul>

        <p>Contact them ASAP!!!</p>';

      mail($toEmail, $subject, $body, $headers);

      header('Content-type: application/json; charset=utf-8');
      echo json_encode($response);
    }

  }

/* Don't need this anymore..
reset($query_vars);
$t = date("U");
$file = $_SERVER['DOCUMENT_ROOT'] . "/../data/gdform_" . $t;
$fp = fopen($file,"w");

while (list ($key, $val) = each ($query_vars)) {

 fputs($fp,"<GDFORM_VARIABLE NAME=$key START>\n");
 fputs($fp,"$val\n");
 fputs($fp,"<GDFORM_VARIABLE NAME=$key END>\n");

 if ($key == "redirect") { $landing_page = $val;}

}

fclose($fp);

if ($landing_page != "")
  header("Location: http://".$_SERVER["HTTP_HOST"]."/$landing_page");
else 
  header("Location: http://".$_SERVER["HTTP_HOST"]."/");
*/

?>

