<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="../css/animations.css" type="text/css">
    <link rel="stylesheet" href="../css/reviews.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,500i" rel="stylesheet">
    <script src="../js/jquery.simplePagination.js"></script>
    <link rel="stylesheet" href = "../css/simplePagination.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js"></script>
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
              <li><a class="sixth before after"href="lessons.php">Lessons</a></li>
              <li><a class="sixth before after"href="reviews.php">Reviews</a></li>
              <li><a class="sixth before after"href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
        </nav>
    </header>

      <div id="reviewIntro"><strong> Reviews </strong></div>
      <div class="setMargin">
      <div id="reviewForm" >
      <form id="ajax-contact" method="post" action="reviews.php">
        <div id="leaveReview" >Leave a Review</div>
        <div class="form-group field">
            <label for="full_name">Name:</label>
            <input class="form-control" type="text" id="full_name" name="full_name" required>
        </div>
        <div class="form-group rating">
          <div id="ratingTitle"> Rating (5 is excellent)</div>
          <input type="radio" id="star5" name="rating" value="5" />
          <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
          <input type="radio" id="star4" name="rating" value="4" />
          <label class="star" for="star4" title="Great" aria-hidden="true"></label>
          <input type="radio" id="star3" name="rating" value="3" />
          <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
          <input type="radio" id="star2" name="rating" value="2" />
          <label class="star" for="star2" title="Good" aria-hidden="true"></label>
          <input type="radio" checked="checked" id="star1" name="rating" value="1" />
          <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
        </div>
        <div class="form-group field">
            <label id="comments" for="review">Comments:</label>
            <textarea class="form-control" rows="4" id="review" name="review" required></textarea>
        </div>
        <div class="form-group field">
            <button class="btn"type="submit">Submit</button>
        </div>
        <div class="g-recaptcha" data-sitekey="6LeXvpAUAAAAAP2s7vhjPr8ebUEdwZ_x6ndTLq_X">
        </div>
      </form>
      </div>

  <?php
        $servername="localhost";
        $username="eclejbzu_erika";
        $password="za2_4_5bn";

        $conn = new mysqli($servername, $username, $password, "eclejbzu_rating_one", 3306);

        if ($conn->connect_error){
          die("connection failed: " .$conn->connect_error);

        }
        // echo "connected successfully. <br>";

        if(isset($_POST['full_name']) && isset($_POST['review']) && isset($_POST['rating'])){
        $name = ($_POST['full_name']);
        $review = mysqli_real_escape_string($conn, $_POST['review']) ;
        $rating = $_POST['rating'];
        $date = date_create()->format('Y-m-d');


        $query = "INSERT INTO rating_one (full_name, rating, review, date) VALUES('" . $name . "', '". $rating. "', '" . ($review). "', '". $date ."')";

        $success = $conn->query($query);

        if (!$success) {
          die("Couldn't enter data: ".$conn->error);

        }
        // echo "Thank You. Your review has been submitted.". "<br>";
  }
        $limit = 12;
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
        $start_from = ($page-1) * $limit;

        $sql = "SELECT review, rating, full_name, date FROM rating_one ORDER BY date DESC LIMIT $start_from, $limit";
        $rs_result = mysqli_query($conn, $sql);

        $result = $conn->query($sql);

        if ($result->num_rows > 0 ) {

        // output data of each row
          while($row = $result->fetch_assoc()) {
            for($x=1;$x<=$row["rating"];$x++) {
            echo '<i  class="fa fa-star fa-2x review" style="color:#F79426"></i>';
              }
            echo '<div class="reviewFont review">'. ($row["review"]). "<br>". $row["full_name"]. "<br>". date('M d, Y', strtotime($row['date'])). "<br>". '</div>'. "<br>";
          }
        }
        // $conn->close();

        $sql = "SELECT COUNT(id) FROM rating_one";
        $rs_result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink = "<nav><ul class='pagination'>";
        for ($i=1; $i<=$total_pages; $i++) {
                     $pagLink .= "<li><a href='reviews.php?page=".$i."'>".$i."</a></li>";
        };
        echo $pagLink . "</ul></nav>";

        ?>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.pagination').pagination({
                items: <?php echo $total_records;?>,
                itemsOnPage: <?php echo $limit;?>,
                cssStyle: 'light-theme',
        		currentPage : <?php echo $page;?>,
        		hrefTextPrefix : 'reviews.php?page='
            });
        	});
        </script>
      </div>

    <div id='contact' class="animatedParent">
      <div class=" animated growIn" id='contactTitle'>
      CONTACT PAUL
      </div>
      <div class="animated growIn" id="contactInfo">
        <div>Phone: (626)384-8926</div>
        <div>Email: eclecticstring@gmail.com</div>
        <div>21210 E. Arrow Hwy #148
        </div>
        <div>Covina, CA 91724
        </div>
      </div>
      <div class="links animated growIn">
        <a href = "https://www.facebook.com/paul.grether.3" target = "_blank">
          <i class="fab fa-facebook-f fa-xs" style="color:black"></i>
        </a>
       <a id="thumbtack" href="https://www.thumbtack.com/ca/covina/music-lessons/guitar-instruction">
          <img src="../images/NewThumbtack.png" alt="Thumbtack link">
        </a>
        <a id="linkedin" href="https://www.linkedin.com/in/paul-grether-5185b3110/">
          <i class="fab fa-linkedin-in fa-xs" style="color:black"></i>
        </a>
        <div id="copyright">
         <div>© 2018 Eclectic String Music</div>
         <a href="http://www.erikayardumian.com" id="webdesignLink" >Website developed by: erikayardumian.com</a>
        </div>
    </div>
    </div>
    <script src="../js/css3-animate-it.js"></script>
  </body>
</html>
