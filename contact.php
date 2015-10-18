<?php
require_once("views/header.php");
require_once("views/header_link.php");
require_once("defaultnavStyles.php");
$contactStyle = 'class="active"';
require_once("views/navbar.php");
// contact form php code
$errEmail = ' ';
$errSubject = '';
$errMessage = '';
$errHuman = '';
$result = '';
if (isset($_POST["submit"])) {
        $email = $_POST['email'];
//        var_dump($email);
        $subject = $_POST['subject'];
//        var_dump($subject);
        $message = $_POST['message'];
//        var_dump($message);
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'neilo2000@gmail.com'; 
        $form = 'Message from Contact Demo ';
        
        $body = "E-Mail: $email\n Subject: $subject\n Message:\n $message";
 

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

         // Check if subject has been entered
        if (!$_POST['subject']) {
            $errSubject = 'Please enter a subject';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }

        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errEmail && !$errSubject && !$errMessage && !$errHuman) {
    if (mail($to, $form, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }

?>

<div class="jumbotron jumbotron-contact"></div>

<h2><span class="header-style">Bookings and Contact Form...</span></h2>    
  <!-- Contact/Booking Form --> 
<div class="container">
  <div class="row">
      <div class="col-xs-12 col-md-6"> <!-- Change these to change columns etc..-->
        
        <h3>Bookings</h3>
        
         <p>
         For more information or to request a quote please call us:
         07 916 16 62 69
         or email us at:
         boamusiques@gmail.com
         </p>
      
      </div>

      <div class="col-xs-10 col-md-6">
      
<form class="form-horizontal" role="form" method="POST" action="contact.php">
  <div class="form-group">
      <div class="col-xs-10">
          <h3>Contact Form</h3>
          <label class="sr-only" for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-10">
          <label class="sr-only" for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
          <?php echo "<p class='text-danger'>$errSubject</p>"; ?>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-10">
         <label class="sr-only" for="message">Message</label>
         <textarea class="form-control" id="message" name="message" placeholder="Your Message"></textarea>
         <?php echo "<p class='text-danger'>$errMessage</p>";?>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-10">
        <label for="human" class="control-label">2 + 3 = ?</label>
          <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
          <?php echo "<p class='text-danger'>$errHuman</p>";?>
      </div>
  </div>
  <div class="form-group">
        <div class="col-xs-10 col-xs-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
  </div>
    <div class="form-group">
        <div class="col-xs-10 col-xs-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form>
</div>
</div>
</div>
<div class="divider">
    <img src="images/g4012.png" alt="divider line">
</div>
<!-- Footer -->
<?php require_once("views/footer.php"); ?>
