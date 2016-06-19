<?php

include('../includes/settings.php');

$title = 'Watch the Secret Formula Webinar that will change your life!';
$description = 'This webinar will change the way your think about making money online.';
$keywords = 'secret webinar';
$script = SCRIPT2;
$footer = 'Webinar showing how to make big money online selling big ticket items.';
$styles = STYLE2;
$favicon = FAV2;

include('../includes/header.php');

?>

<div align="center">

<div id="loadingDiv"><img src="<?php echo URL ?>Assets/loading.gif" /></div>
<div class="message"></div>
<form method="POST" action="submit.php" class="webinar">
  <table border="0" class="webinarTable">
    <tr>
      <td colspan="6">
        <h1 class="webinarHeader">Fill out this form to be contacted about how to get started.</h1>
        <!-- Note: form action was: http://secretformulawebinar.net/getcd.php is was: id="mainForm" -->
      </td>
    </tr>
    <tr>
      <td width="16%" class="webinarTd">
        <input type="text" name="fname" value="Name" id="fname" onfocus="if (this.value == 'Name') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Name';}">
      </td>
      <td width="16%" class="webinarTd">
        <input type="text" name="email" value="Email" id="email" onfocus="if (this.value == 'Email') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Email';}">
      </td>
      <td width="16%" class="webinarTd">
        <input type="text" name="phone" value="Phone" id="phone" onfocus="if (this.value == 'Phone') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Phone';}">
      </td>
      <td width="16%" class="webinarTd">
        <input type="text" name="norobot" id="norobot" value="Enter Captcha" onfocus="if (this.value == 'Enter Captcha') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Enter Captcha';}" />
        </td>
        <td width="12%" class="webinarTd">
          <img src="../captcha.php" style="padding:10px;" />
        </td>
      <td width="8%">
        <!-- past form hidden fields...
        <input type="hidden" name="redirect" value="http://www.signupandmakemoney.com/webinar/thanks.php">
        <input type="hidden" name="group" value="1">
        <input type="hidden" name="id" value="1880">
        <input type="hidden" name="type" value="1">
        <input type="hidden" name="spage" value="htmlcode">
        -->
        <input type="submit" name="submit" id="submit" value="Submit">
      </td>
    </tr>
    <tr>
      <td width="16%"><p id="nameError" class="errors"></p></td>
      <td width="16%"><p id="emailError" class="errors"></p></td>
      <td width="16%"><p id="phoneError" class="errors"></p></td>
      <td width="16%"><p id="robotError" class="errors"></p></td>
      <td width="12%"></td>
      <td width="8%"></td>
    </tr>
  </table>
</form>
</div> 
<br /><br />

<div align="center">
  <iframe src="http://secretformulawebinar.net/landingpage1.php?user=signupmoney" style="width: 1100px; height: 1350px; margin-left: -65px"></iframe>
</div>

   <br /><br />

   <?php

     include('../includes/footer.php');

   ?>

