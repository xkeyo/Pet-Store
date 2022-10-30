<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Find</title>
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
        <?php
          if (isset($_POST['submitfind'])){
            $petsList = $_POST['pets'];
            $file = fopen("findPet.txt", "a");

            if($petsList[0] == "dog"){
              $breeddog = $_POST['breeddog1'];
              $agedog = $_POST['agedog1'];
              $genderdog = $_POST['genderdog1'];
              $alongDogList = $_POST['alongdogs'];

              if($petsList[0] == "dog" && $breeddog == "bulldog" && $agedog == "10" && $genderdog == "male" && $alongDogList[0] == "alongdog"){
                include_once 'petEx1.php';
              }

              else if($petsList[0] == "dog" && $breeddog == "pomeranian" && $agedog == "10" && $genderdog == "female" && $alongDogList[0] == "alongdog"){
                include_once 'petEx3.php';
              }

              else{
                echo '<span style= " font-weight: bold; font-size: 20px;" >Unfortunately We Do Not Have A Pet That Matches The Criterias You Are Looking For!</span>';
              }

            }
            else{
              $breedcat = $_POST['breedcat1'];
              $agecat = $_POST['agecat1'];
              $gendercat = $_POST['gendercat1'];
              $alongCatList = $_POST['alongcat'];

              if($petsList[0] == "cat" && $breeddog == "ragdoll" && $agedog == "15" && $genderdog == "male" && $alongDogList[0] == "alongcat"){
                include_once 'petEx2.php';
              }

              else if($petsList[0] == "cat" && $breeddog == "persiancat" && $agedog == "8" && $genderdog == "male" && $alongDogList[0] == "alongcat"){
                include_once 'petEx4.php';
              }

              else{
                echo "Unfortunately We Do Not Have A Pet That Matches The Criterias You Are Looking For!";
              }

            }
          }
        ?>
          <!--Find a Dog or Cat area of the Webpage-->
          <div id="find">
            <br /><br />
            <h1>Welcome to finding your pet</h1>
            <form
              method="post"
              name="form1"
              id="form1"
              onsubmit="return validateForm1()"
              onreset="return clear1()"
            >
              <h1>Please complete the following form !</h1>
              <br />
              <fieldset>
                <legend>Cat or Dog</legend>
                <br />
                <input type="checkbox" id="dog" name="pets[]" value="dog" />
                <label for="dog">Dog</label>
                <input type="checkbox" id="cat" name="pets[]" value="cat" />
                <label for="cat">Cat</label>
                <br />
                <br />
              </fieldset>
              <br />
              <fieldset>
                <legend>Dog</legend>
                <br />
                <span>Select a breed of Dog:</span> <br />
                <select id="breeddog1" name="breeddog1">
                  <option value="">---Select---</option>
                  <option value="bulldog">Bulldog</option>
                  <option value="germanshepherd">German Shepherd</option>
                  <option value="poodle">Poodle</option>
                  <option value="goldenretriever">Golden Retriever</option>
                  <option value="labradorretriever">Labrador Retriever</option>
                  <option value="siberianhusky">Siberian Husky</option>
                  <option value="pomeranian">Pomeranian</option>
                  <option value="none">Doesn't Matter</option>
                </select>

                <br /><br />
                <span>Prefered age of dog</span> <br />
                <select id="agedog1" name="agedog1">
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
                  <option value="none">Doesn't Matter</option>
                </select>

                <br /><br />
                <span>Prefered Gender:</span> <br />
                <select id="genderdog1" name="genderdog1">
                  <option value="">---Select---</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="none">Doesn't Matter</option>
                </select>
                <br />
                <br />
                <span>Get Along:</span> <br />
                <input
                  type="checkbox"
                  id="alongdog"
                  name="alongdogs[]"
                  value="alongdog"
                />
                <label for="alongdog">Gets along with Other Dogs</label>
                <br />
                <input
                  type="checkbox"
                  id="alongchilddog"
                  name="alongdogs[]"
                  value="alongchilddog"
                />
                <label for="alongchilddog">Gets along with Childrens</label>
                <br />
                <input
                  type="checkbox"
                  id="nonealongdog"
                  name="alongdogs[]"
                  value="nonealongdog"
                />
                <label for="nonealongdog">Gets along with neither</label>
              </fieldset>
              <br /><br />
              <fieldset>
                <legend>Cat</legend>
                <br />
                <span>Select a breed of Cat:</span> <br />
                <select id="breedcat1" name="breedcat1">
                  <option value="">---Select---</option>
                  <option value="persiancat">Persian cat</option>
                  <option value="mainecoon">Maine Coon</option>
                  <option value="britishshorthair">British Shorthair</option>
                  <option value="bengalcat">Bengal cat</option>
                  <option value="siamesecat">Siamese cat</option>
                  <option value="sphynx cat">Sphynx cat</option>
                  <option value="ragdoll">Ragdoll</option>
                  <option value="none">Doesn't Matter</option>
                </select>

                <br /><br />
                <span>Prefered age of cat</span> <br />
                <select id="agecat1" name="agecat1">
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
                  <option value="none">Doesn't Matter</option>
                </select>

                <br /><br />
                <span>Prefered Gender:</span> <br />
                <select id="gendercat1" name="gendercat1">
                  <option value="">---Select---</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="none">Doesn't Matter</option>
                </select>
                <br /><br />

                <span>Get Along:</span>
                <br />
                <input
                  type="checkbox"
                  id="alongcat"
                  name="alongcat[]"
                  value="alongcat"
                />
                <label for="alongcat">Gets along with Other Cats</label>
                <br />
                <input
                  type="checkbox"
                  id="alongchildcat"
                  name="alongcat[]"
                  value="alongchildcat"
                />
                <label for="alongchildcat">Gets along with Childrens</label>
                <br />
                <input
                  type="checkbox"
                  id="nonealongcat"
                  name="alongcat[]"
                  value="nonealongcat"
                />
                <label for="nonealongcat">Gets along with neither</label>
              </fieldset>

              <br /><br />
              <input type="submit" name= "submitfind" value="Submit" />
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
