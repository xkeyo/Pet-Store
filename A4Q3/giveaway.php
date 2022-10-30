<?php
  session_start();

  if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
  }

  else{
      if (isset($_POST['logoutacc'])){
        session_unset();
        session_destroy();
        echo '<script>alert("You have now logged out");</script>';
        exit();
      }
      if (isset($_POST['giveawaysubmit'])){
        $user = $_SESSION['username'];
        $petsList = $_POST['givepet'];
        $breed = $_POST['givebreed'];
        $age = $_POST['giveage'];
        $gender = $_POST['givegender'];
        $alongList = $_POST['givealong'];
        $smallchildList = $_POST['givechild'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];

        $file = fopen("givePet.txt", "a");
        $lines = count(file("givePet.txt")) +1;
        fwrite($file, $lines .":");
        fwrite($file, $user .":");
        foreach ($petsList as $pets) {
          fwrite($file, $pets .':');
        }
        fwrite($file, $breed .":");
        fwrite($file, $age .":");
        fwrite($file, $gender .":");
        foreach ($alongList as $along) {
          fwrite($file, $along .':');
        }
        foreach ($smallchildList as $smallchild) {
          fwrite($file, $smallchild ."\n");
        }
        //fwrite($file, $fname .":");
        //fwrite($file, $lname .":");
        //fwrite($file, $email ."\n");
        fclose($file);
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Giveaway</title>
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
          <form method="post" name="logout" style="color: white; background-color: rgb(56, 160, 192);">
            <span style= style= "color: black;">Welcome USER: <?php echo $_SESSION['username'] ?> </span>
            <button style="float: right; padding: 10px;" name= "logoutacc" >Log Out</button>
          </form>
          <!--Home area of the Webpage-->
          <!--Giveaway area of the Webpage-->
          <div id="giveaway">
            <br /><br />
            <br />
            <form
              method ="post"
              name="form2"
              id="form2"
              onsubmit="return validateForm2()"
              onreset="return clear2()"
            >
            <h1>Have a Pet to Giveaway?</h1>
              <h1>Please complete the following form !</h1>
              <br />
              <fieldset>
                <legend>Cat or Dog</legend>
                <br />
                <input
                  type="checkbox"
                  id="givedog"
                  name="givepet[]"
                  value="dog"
                />
                <label for="givedog">Dog</label>
                <input
                  type="checkbox"
                  id="givecat"
                  name="givepet[]"
                  value="cat"
                />
                <label for="givecat">Cat</label>
                <br />
                <br />
              </fieldset>
              <br />
              <fieldset>
                <legend>Information about your pet</legend>
                <br />
                <span>Select a breed of Dog/Cat:</span> <br />
                <select id="givebreed" name="givebreed">
                  <option value="">---Select---</option>
                  <option value="bulldog">Bulldog</option>
                  <option value="germanshepherd">German Shepherd</option>
                  <option value="poodle">Poodle</option>
                  <option value="goldenretriever">Golden Retriever</option>
                  <option value="labradorretriever">Labrador Retriever</option>
                  <option value="siberianhusky">Siberian Husky</option>
                  <option value="pomeranian">Pomeranian</option>
                  <option value="persiancat">Persian cat</option>
                  <option value="mainecoon">Maine Coon</option>
                  <option value="britishshorthair">British Shorthair</option>
                  <option value="bengalcat">Bengal cat</option>
                  <option value="siamesecat">Siamese cat</option>
                  <option value="sphynx cat">Sphynx cat</option>
                  <option value="ragdoll">Ragdoll</option>
                </select>

                <br /><br />
                <span>The age of Dog/Cat</span> <br />
                <select id="giveage" name="giveage">
                  <option value="">---Select---</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                </select>

                <br /><br />
                <span>The Gender:</span> <br />
                <select id="givegender" name="givegender">
                  <option value="">---Select---</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
                <br />
                <br />
                <span>Get Along:</span> <br />
                <input
                  type="checkbox"
                  id="otherdog"
                  name="givealong[]"
                  value="otherdog"
                />
                <label for="otherdog">Gets along with Other Dogs</label>
                <br />

                <input
                  type="checkbox"
                  id="othercat"
                  name="givealong[]"
                  value="othercat"
                />

                <label for="othercat">Gets along with Other Cats</label>
                <br />
                <input
                  type="checkbox"
                  id="children"
                  name="givealong[]"
                  value="children"
                />
                <label for="children">Gets along with Childrens</label>
                <br />
                <input
                  type="checkbox"
                  id="alongnone"
                  name="givealong[]"
                  value="alongnone"
                />
                <label for="alongnone">Doesn't get along with either</label>
                <br /><br />

                <span>Suitable for a family with small children:</span> <br />
                <input type="checkbox" id="yes" name="givechild[]" value="yes" />
                <label for="yes">Yes</label>

                <input type="checkbox" id="no" name="givechild[]" value="no" />
                <label for="no">No</label>
              </fieldset>
              <br /><br />

              <fieldset>
                <legend>Personal Information</legend>
                <label for="comment"><span>Comment Area</span></label> <br />
                <textarea
                  id="comment"
                  name="comment"
                  rows="10"
                  cols="50"
                ></textarea>
                <br />
                <br />
                <br />

                <label for="fname"><span>First Name:</span></label>
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="Your First Name..."
                />

                <br />
                <label for="lname"><span>Last Name:</span></label>
                <input
                  type="text"
                  id="lname"
                  name="lastname"
                  placeholder="Your Last Name..."
                />

                <br />
                <label for="email"><span>Email</span></label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  pattern="([a-zA-Z0-9!#$%&'*+-/=?^_`{]{1,63})+@([a-zA-Z0-9.-]+\.[a-z]{1,273})+\.(?:[a-z||A-Z||0-9]{2,3})$"
                  title="Valid input: Ex. recepient@domain.subdomain.com"
                  placeholder="Email"
                />
                <br />
                <br />
              </fieldset>
              <br />
              <input type="submit" name="giveawaysubmit" value="Submit" />
              <input type="reset" value="Clear" />
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
