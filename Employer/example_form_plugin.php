
<?php
/*
plugin name:example form plugin
plugin uri:http://www.miftahulzannat703@gmail.com
description: simple contact page
version:1.0
author:zannat
author url:http://www.zannat.com/contact
*/

function example_form_plugin()
{
	$content = '';
	$content.='<form method="POST" action="http://localhost/Codes/astra_theame/feedback">';
	$content.='<label>Name</label>';
	$contenet.='<input type="text" name="your_name" class="form_control" placeholder="Enter Your Name">';
   $content.='<label>Email</label>';
	$contenet.='<input type="email" name="your_email" class="form_control" placeholder="Enter Your Email">';

	$content.='<label>Comments</label>';
	$contenet.='<textarea name="your_comments" class="form_control" placeholder="Enter your comments"></textarea>';

	$content.='<br><input type="submit" name="example_form_submit" class="btn btn-md btn-primary" value="send your info." class="form_control">';
	$content.='</form>';
	return $content;

}
add_shortcode('example_form','example_form_submit');
function example_form_capture()
{
	if(isset($_POST['example_form_submit']))
	{
		$name=$_POST['your name'];
		$email=$_POST['your email'];
		$comments=$_POST['your comments'];
		
		$to ='zannat@gmail.com';
		$subject = 'test to submit';
		$message = ''.$name. '_'.$email.'_'.$comments;
		wp_mail($to,$subject,$message);
	}
}
add_action('wp_head','')
?>