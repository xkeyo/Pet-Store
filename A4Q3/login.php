<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Signup</title>
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
        <?php
          require 'loginFunctions.php';
        ?>
        <div id="login" style="height: 1400px;">
        <center>
          <form method="post" style="height: 800px; width: 800px; color: white; background-color: lightseagreen" action="">
            <span style= "font-size: 30px;">LOG IN</span><br/><br/>
            <label for="username">USERNAME<label>
            <input type="text" name="username"/><br/><br/>
            <label for="password">PASSWORD<label>
            <input type="password" name="password"/><br/><br/>
            <input type="submit" name="submit" value="Log in" />
            <a href="signup.php">Sign up</a>
          </form>
          <br/>
          <p>USERNAME can contain letters (both upper and lowercase) and digits only. </p>
          <br/><p>PASSWORD must be at least 4 characters long (characters are to be letters and digits only), have at least one letter and at least one digit. 
        </center>
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