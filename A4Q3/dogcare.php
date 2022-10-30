<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Dog Care</title>
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
          <!--Dog Care area of the Webpage-->
          <div id="dogcare">
            <h1>How to Take care of Your Dog</h1>
            <br />
            <br />
            <div class="dogcaring">
              <br />
              <h2>THE BASICS OF DOG CARE 101</h2>
              <br />
              <span> 1- Grooming</span><br /><br />
              <cite>
                Help keep your dog clean and reduce shedding with frequent
                brushing. Check for fleas and ticks daily during warm weather.
                Most dogs don't need to be bathed more than a few times a year.
                Before bathing, comb or cut out all mats from the coat.
                Carefully rinse all soap out of the coat, or the dirt will stick
                to soap residue.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/dog-care/general-dog-care"
                  >General Dog Care</a
                ></cite
              >
              by Aspca (2022). <br /><br />

              <span> 2- Feeding</span><br /><br />
              <cite>
                Puppies should be fed a high-quality, brand-name puppy food
                (large breed puppy foods for large breeds). Please limit "people
                food," however, because it can result in vitamin and mineral
                imbalances, bone and teeth problems and may cause very picky
                eating habits and obesity. Clean, fresh water should be
                available at all times, and be sure to wash food and water
                dishes frequently.
                <br />
                <a
                  href="https://www.aspca.org/pet-care/dog-care/general-dog-care"
                  >General Dog Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />
              <cite>
                Cats require taurine, an essential amino acid, for heart and eye
                health. The food you choose should be balanced for the life
                stage of your cat or kitten. Properly balanced foods will
                contain taurine.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/dog-care/general-dog-care"
                  >General Dog Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />

              <span> 3- Housing</span><br /><br />
              <cite>
                Your pet needs a warm, quiet place to rest, away from all drafts
                and off the floor. A training crate or dog bed is ideal, with a
                clean blanket or pillow placed inside. Wash the dog's bedding
                often. If your dog will be spending a lot of time outdoors, be
                sure she has access to shade and plenty of cool water in hot
                weather, and a warm, dry, covered shelter when it's cold.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/dog-care/general-dog-care"
                  >General Dog Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />

              <span> 4- Exercise</span><br /><br />
              <cite>
                Dogs need exercise to burn calories, stimulate their minds, and
                stay healthy. Individual exercise needs vary based on breed or
                breed mix, sex, age and level of health. Exercise also tends to
                help dogs avoid boredom, which can lead to destructive
                behaviors. Supervised fun and games will satisfy many of your
                pet's instinctual urges to dig, herd, chew, retrieve and chase.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/dog-care/general-dog-care"
                  >General Dog Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />

              <span> 5- Handling</span><br /><br />
              <cite>
                To carry a puppy or small dog, place one hand under the dog's
                chest, with either your forearm or other hand supporting the
                hind legs and rump. Never attempt to lift or grab your puppy or
                small dog by the forelegs, tail or back of the neck. If you do
                have to lift a large dog, lift from the underside, supporting
                his chest with one arm and his rear end with the other.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/dog-care/general-dog-care"
                  >General Dog Care</a
                ></cite
              >
              by Aspca (2022).<br />
            </div>
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
