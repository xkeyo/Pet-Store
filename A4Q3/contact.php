<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Contact</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <div class="container">
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
          <!--Contact Us area of the Webpage-->
          <div id="contact">
            <form>
              <fieldset>
                <h1>CONTACT US</h1>
                <p>
                  Got any questions? We'd love to hear from you. Send us a
                  message and we'll respond as soon as possible
                </p>
                <br /><br />
                <span class="contactus">
                  Get in touch with us Name: Pratham Patel <br />
                  Student ID: 40227835
                  <br />
                  To Email Me Click the Following:
                  <a href="mailto:pratham.patelpr@gmail.com">Email</a></span
                >
              </fieldset>
              <br />
              <br />
              <fieldset>
                <legend>Personal Information</legend>
                <br />

                <label for="contactfname"><span>First Name:</span></label>
                <input
                  type="text"
                  id="contactfname"
                  name="firstname"
                  placeholder="Your First Name..."
                />

                <br />
                <label for="contactlname"><span>Last Name:</span></label>
                <input
                  type="text"
                  id="contactlname"
                  name="lastname"
                  placeholder="Your Last Name..."
                />

                <br />
                <label for="contactemail"><span>Email</span></label>
                <input
                  type="email"
                  id="contactemail"
                  name="email"
                  placeholder="Email"
                />
                <br />
                <br />
                <label for="message"><span>Message Area</span></label> <br />
                <textarea
                  id="message"
                  name="message"
                  rows="15"
                  cols="70"
                ></textarea>
                <br />
              </fieldset>
            </form>
          </div>
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
    </div>
  </body>
</html>
