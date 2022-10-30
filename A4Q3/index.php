<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
  </head>

  <body>
    <!--Side Menu of the Webpage-->
    <div class="sidebar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="find.php">Find a Dog or Cat</a></li>
        <li><a href="dogcare.php">Dog Care</a></li>
        <li><a href="catcare.php">Cat Care</a></li>
        <li><a href="signup.php">Create an account</a></li>
        <li><a href="giveaway.php">Have a pet to giveaway</a></li>
        <li><a href="contact.php">Contact US</a></li>
      </ul>
    </div>
    <!--Content Area of the Webpage-->
    <div class="bodyContent">
      <!--Header of the Webpage-->

      <?php 
      include_once 'header.php';
      ?>

      <div class="content">
        <!--Home area of the Webpage-->
        <div id="home">
          <div id="homepic">
            <span>WELCOME TO HAPPY PAWS !</span>
          </div>
          <div id="homeinfo">
            The goal of Happy Paws Adoption Center is to improve the lives of
            cats and dogs by assisting in their search for a new home. Other
            services offered by Happy Paws include dog and cat care for new pet
            owners. In addition, if you are unable to care for a pet and decide
            to give it up for any reason, our adoption facility also accepts new
            dogs and cats.
          </div>
        </div>
        <!--Privacy area of the Webpage-->
        <div id="privacy">
          <h1>PRIVACY & DISCLAIMER STATEMENT</h1>
          <br /><br />
          <div class="privacyclass">
            <br />
            <br />
            <h2>Our Pivacy Policy was last updated on 7/14/2022</h2>
            <br /><br />
            <p>When you visit the website, we may collect several data</p>
            <br />
            <p>
              You consent to the use of the information about your online
              activity that our website gathers after you enable it to use
              cookies
            </p>
            <br />
            <p>
              Although, we assure that your information won't be sold or used
              inappropiately.
            </p>
            <br />
            <p>
              Also, this website creator is shieled from any inaccurate
              information supplied by a pet owner or any other users
            </p>
            <br />
          </div>
        </div>
      </div>
      <!--Footer of the Webpage-->

      <?php 
      include_once 'footer.php';
      ?>

    </div>
  </body>
</html>
