<!-- GetResponse subscription form | start -->

<div class="ad2">

<img src="<?php echo URL ?>Assets/rss.jpg" alt="RSS Subscribe today." title="Join the sign up bonus mailing list and never miss a sign up bonus." border="0" align="center" width="200" height="183" />

<form action="http://www.getresponse.com/cgi-bin/add.cgi" method="post" id="GRSubscribeForm" accept-charset="UTF-8">

<fieldset>

<legend style="padding-bottom:5px; font-weight:bold;">Never miss a sign up bonus!</legend>

<p>I am finding sites that pay you to sign up all the time. This site is updated regularly. If you would like to stay informed of newly added sites, then please subscribe to the free newsletter below:</p>

    <table>

      <tr>

        <td>

          <label for="GRCategory2">

          Name:        </label>        </td>

        <td><input type="text" name="category2" size="20" id="GRCategory2" /></td>

        </tr><tr>

          <td><label for="GRCategory3">

            Email:

        </label>        </td>

        <td><input type="text" name="category3" size="20" id="GRCategory3" /></td>

        </tr>

    </table>   

      <input type="submit" value="Subscribe" />

<p>

Powered by <a href="http://grsnip.com/pr/PvQ" target="_blank">Get Response email marketing</a> software<br /><br />

Your information will NEVER be sold or rented to any other party.

You can unsubscribe yourself, automatically, whenever YOU want.

</p>

</fieldset>

<input type="hidden" name="category1" value="signupandmakemoney" /> 

<input type="hidden" name="confirmation" value="http://www.signupandmakemoney.com/info/confirmindex.html"/> 

<input type="hidden" name="error_page" value="http://www.signupandmakemoney.com/info/confirmindex.html"/> 

<input type="hidden" name="ref" value="000" />

<input type="hidden" name="getpostdata" value="get" />

</form>

<style>

<!--

/* form box */

#GRSubscribeForm fieldset {

width: 260px; 

border: 0;

}	

/* comment about GetResponse */

#GRSubscribeForm p {

font-size: x-small;

}		

/* table used to position form elements */

#GRSubscribeForm table {

border: 0;

}		

-->

</style>

<!-- GetResponse subscription form | end -->

<br /><br /><br />

<?php



	$page = $_SERVER['PHP_SELF'];

	

	if ($page == '/index.php') {

		echo '<br /><br /><br />';

	}



?>



</div>













