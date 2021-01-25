<?php include 'header.php'; ?>

	<section id="in_pge_banner"  class="banner-content cntct_page_banner">
		<div class="header-text text-center">
			<h4 class="page-title">Contact</h4>
			<p class="page-breadcrumb">Home  /  Contact</p>				
		</div>			
	</section>
	

	<!-- Service -->
	<section id="contact" class="contact-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-7 left-side-col npl">
					<!-- End banner -->
																							<?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('from@example.com', 'Site Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('contact@uspclogistics.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['fname'])) {
        $mail->Subject = 'Uspc Logistics Contact';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Full Name: {$_POST['name']}
Email: {$_POST['email']}
Phone Number: {$_POST['phone']}
Address: {$_POST['address']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            echo "<div class='alert alert-success'>
  <strong>Sent!</strong> Message successfully send, we will get back to you soon.
</div>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?> 
				<form class="form-horizontal" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" required="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" name="email" class="form-control" required="">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
    <div class="col-sm-10"> 
      <input type="text" name="phone" class="form-control" required="">
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Address:</label>
    <div class="col-sm-10"> 
      <input type="text" name="address" class="form-control" required="">
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message:</label>
    <div class="col-sm-10"> 
      <textarea name="note" class="form-control" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
				</div>
				<div class="col-md-4 col-md-offset-1 col-sm-offset-0 right-side-col res-pad-o">
					<h4 class="cntct-heading">Company information</h4>
					<ul class="contact-des  npl res-m-bttm clearfix">
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i> <span>+1 (617) 249-6532</span>
						</li>
						<li>
							<i class="fa fa-fax" aria-hidden="true"></i> <span>+1 (617) 249-6532</span>
						</li>
						<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i> <span>contact@uspclogistics.com</span>
						</li>
						<li>
							<i class="fa fa-map pull-left" aria-hidden="true"></i><span>Headquarters: <br>
							 480 William F McClellan Hwy #203C, Boston, MA 02128, USA</span>
						</li>
					</ul>
					<div class="social">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
				</div>					
			</div>				
		</div>
	</section>
	<?php include 'footer.php'; ?>