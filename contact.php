

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Innova</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
  </head>
  <body>
    <!-- header section -->
       <header class="header_section">
         <div class="container">
            <nav class="navbar  navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="index.php">
               <img src="image/logo.svg">
               </a>
             <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbar-collapse-x">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Innova Sequent</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="datascience.php">Data Science Consultancy</a>
                     </li>
                  </ul>
                 <div class="get-quote">
              <a href="contact.php" class="default-btn">
                <span>Contact Us</span>
              </a>
            </div>
               </div>
            </nav>
         </div>
      </header>
    <!-- contact form -->
    <section class="contact_form section_padding contact-page-section">
      <div class="container">
        <div class="row d-flex align-items-center overflow-hidden">
          <div class="col-lg-6 align-items-center">
            <div class="contact_boxs">
              <h2>Contact Us</h2>
              <p>Feel free to Contact us any time, we will get back to you as soon as we can</p>
            </div>
            <div class="form-column col-md-12 col-sm-12 col-xs-12">
              <div class="inner-column">
                <!--Contact Form-->
                <div class="contact-form">


<?php
if(!empty($_POST["send"])) {
  $userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
  $userPhone = $_POST["userPhone"];
  $userMessage = $_POST["userMessage"];
  $toEmail = "a.m.alamgir28@gmail.com";
  
  $mailHeaders = "Name: " . $userName .
  "\r\n Email: ". $userEmail  . 
  "\r\n Phone: ". $userPhone  . 
  "\r\n Message: " . $userMessage . "\r\n";

  if(mail($toEmail, $userName, $mailHeaders)) {
      $message = "Your contact information is received successfully.";
  }
}
?>

<div class="form-container">
  <form name="contactFormEmail" method="post">
    <div class="input-row">
      <label>Name <em>*</em></label> 
      <input type="text" name="userName" required id="userName"> 
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label> 
      <input type="email" name="userEmail" required id="userEmail"> 
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label> 
      <input type="text" name="userPhone" required id="userPhone">
    </div>
    <div class="input-row">
      <label>Message <em>*</em></label> 
     <!-- <textarea name="userMessage" required id="userMessage"> -->
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?> </strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>



                </div>
                <!--End Contact Form-->
              </div>
            </div>
          </div>
          <div class="col-lg-6">
             <div class="contact_box_right">
                <div class="contact_inner_rx">
                   <h2>Tailored Solutions for Your Industry Challenges.</h2>
                   <a href="info@innova-analytics.ai"><span><img src="image/contact-icon.svg"></span>info@innova-analytics.ai</a>
                   <div class="image_box_rn">
                      <img src="image/contact-image.svg">
                   </div>
                   <div class="footer_content">
                      <p>Delivering actionable and accurate insights. Optimize, predict and avoid costly surprises.</p>
                   </div>
                </div>
             </div>
          </div>
          <!--Info Column-->
        </div>
      </div>
    </section>
    
    <!-- common js -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        
    </script>
  </body>
</html>