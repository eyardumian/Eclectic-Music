<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Lessons</title>
    <!-- <script src="../js/jquery.min.js"></script> -->
    <link rel="stylesheet" href="../css/animations.css" type="text/css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/lessons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,500i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>
  <body data-target = ".navbar-fixed-top">
    <header>
      <nav class='navbar navbar-inverse navbar-fixed-top navbar-light bg-light' style="background-color: rgba(255,255,255,.2);">
        <div class='container-fluid'>
          <div class="navbar-header">
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
          </div>
          <div class='collapse navbar-collapse' id="myNavbar">
            <ul class='nav navbar-nav ml-auto navbar-right wrapper'>
              <li><a class="sixth before after" href="../index.html">Home</a></li>
              <li><a class="sixth before after"href="../blog/wordpress/index.php">Blog</a></li>
              <!-- <li><a class="sixth before after"href="bio.html">Bio</a></li> -->
              <li><a class="sixth before after"href="lessons.php">Lessons</a></li>
              <li><a class="sixth before after"href="reviews.php">Reviews</a></li>
              <!-- <li><a class="sixth before after"href="store.html">Store</a></li> -->
              <li><a class="sixth before after"href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div id="lessonsPage">
      <div id="lessonsTitle"><strong>
      GUITAR, BASS, AND PIANO LESSONS
    </strong></div>

      <div class="form">
      <form name="contactform" method="post" action="lessons.php">
        <div id="contactForm" >Contact us to schedule a lesson. Your first lesson is free!</div>

        <div class="form-group">
          <div class="form-group field">
            <label for="first_name">First Name *</label>
            <input  class="form-control" type="text" name="first_name" maxlength="50" size="30">
          </div>
          <div class="form-group field">
            <label for="last_name">Last Name *</label>
            <input  class="form-control" type="text" name="last_name" maxlength="50" size="30">
          </div>
          <div class="form-group field">
            <label for="email">Email Address *</label>
            <input  class="form-control"type="text" name="email" maxlength="80" size="30">
          </div>
          <div class="form-group field">
            <label for="telephone">Telephone Number</label>
            <input  class="form-control"type="text" name="telephone" maxlength="30" size="30">
          </div>
          <div class="form-group field">
            <label for="comments">Comments *</label>
            <textarea  class="form-control" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
          </div>
        </div>
        <div class="form-group field">
            <button class="btn pull-right"type="submit">Submit</button>
        </div>
      </form>
    </div>

      <?php

      // $servername="127.0.0.1";
      // $username="root";
      // $password="Insecure";
      //
      // $conn = new mysqli($servername, $username, $password, "pgrether", 8889);
      //
      // if ($conn->connect_error){
      //   die("connection failed: " .$conn->connect_error);
      //
      // }
      // echo "connected successfully";

      if(isset($_POST['email'])) {

          // EDIT THE 2 LINES BELOW AS REQUIRED
          $email_to = "pgrether@eclecticstringmusic.com";
          $email_subject = "MUSIC LESSONS";

          function died($error) {
              // your error code can go here
              echo "We are very sorry, but there were error(s) found with the form you submitted. ";
              echo "These errors appear below.<br /><br />";
              echo $error."<br /><br />";
              echo "Please go back and fix these errors.<br /><br />";
              die();
          }


          // validation expected data exists
          if(!isset($_POST['first_name']) ||
              !isset($_POST['last_name']) ||
              !isset($_POST['email']) ||
              // !isset($_POST['telephone']) ||
              !isset($_POST['comments'])) {
              died('We are sorry, but there appears to be a problem with the form you submitted.');
          }



          $first_name = $_POST['first_name']; // required
          $last_name = $_POST['last_name']; // required
          $email_from = $_POST['email']; // required
          $telephone = $_POST['telephone']; // not required
          $comments = $_POST['comments']; // required

          $error_message = "";
          $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if(!preg_match($email_exp,$email_from)) {
          $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }

          $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($string_exp,$first_name)) {
          $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }

        if(!preg_match($string_exp,$last_name)) {
          $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
        }

        if(strlen($comments) < 2) {
          $error_message .= 'The Comments you entered do not appear to be valid.<br />';
        }

        if(strlen($error_message) > 0) {
          died($error_message);
        }

          $email_message = "Form details below.\n\n";


          function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
          }



          $email_message .= "First Name: ".clean_string($first_name)."\n";
          $email_message .= "Last Name: ".clean_string($last_name)."\n";
          $email_message .= "Email: ".clean_string($email_from)."\n";
          $email_message .= "Telephone: ".clean_string($telephone)."\n";
          $email_message .= "Comments: ".clean_string($comments)."\n";

      // create email headers
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      @mail($email_to, $email_subject, $email_message, $headers);
    }
    ?>

    <!-- <div class="container"> -->
      <div class="row">
        <div class="background">
        <div class=" location">
          <div id="locationHeading"><strong>LOCATION</strong></div>
          <div id="locationInfo">
            Lessons for ages 8+ are availabe online via Skype or at your home in Los Angeles, Orange, San Bernadino, and Riverside Counties.
            <!-- In-home lessons in South Los Angeles County are held on Mondays, Wednesdays, Fridays, and Sundays. In-home lessons are held in Orange County on Tuesdays, Thursdays, and Saturdays. -->
          </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class=" pricing">
          <div id="priceHeading"><strong>PRICING</strong></div>
          <div id="freeLesson">*Free trial lesson</div>
          <div id="discount">*Sibling discount: $10</div>
          <div class="centerBlock">
            <div class="col-sm-6">
              <div id="inHomeTitle" class="inHome"><strong>In-home Lessons</strong></div>
              <div class="inHome"><strong>$45 per hour</strong></div>
              <div class="inHome"><strong>Group (2 or more students): $30/student per hour</strong></div>
              <!-- <div class="online"><strong>$30/student per hour</strong></div> -->

            </div>
            <div class="col-sm-6">
              <div id="onlineTitle" class="online"><strong>Online Lessons</strong></div>
              <div class="online"><strong>$45 per hour</strong></div>
            </div>
            <div class="online"><strong>Group (2 or more students): $20/student per hour</strong></div>
            <!-- <div class="online"><strong>$20/student per hour</strong></div> -->
          </div>
        </div>
      </div>
      </div>

      <!-- include your own success html here -->

      <!-- Thank you for contacting us. We will be in touch with you very soon. -->


    <!-- </div> -->

    <div id='contact' class="animatedParent">
      <div class=" animated growIn" id='contactTitle'>
      CONTACT PAUL
      </div>
      <div class="animated growIn" id="contactInfo">
        <div> (626)384-8926</div>
        <div>eclecticstring@gmail.com</div>
        <div>21210 E. Arrow Hwy #148
        </div>
        <div>Covina, CA 91724
        </div>
      </div>
      <div class="links animated growIn">
        <a href = "https://www.facebook.com/paul.grether.3" target = "_blank">
          <!-- <img src="../images/002-facebook-logo.png" alt="Linkedin link"> -->
          <i class="fab fa-facebook-f fa-xs" style="color:black"></i>
        </a>
       <a id="thumbtack" href="https://www.thumbtack.com/ca/covina/music-lessons/guitar-instruction">
          <img src="../images/NewThumbtack.png" alt="Thumbtack link">
        </a>
        <a id="linkedin" href="https://www.linkedin.com/in/paul-grether-5185b3110/">
          <!-- <img src="../images/linkedin-logo.png" alt="Linkedin link"> -->
          <i class="fab fa-linkedin-in fa-xs" style="color:black"></i>
        </a>
        </div>
      <div id="copyright">
       <div>© 2018 Eclectic String Music</div>
       <a href="http://www.erikayardumian.com" id="webdesignLink" >Website developed by: erikayardumian.com</a>
      </div>
    </div>
    <!-- <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="../js/css3-animate-it.js"></script>
    <script src="../backend/send_form_email.php"></script>
  </body>
</html>
