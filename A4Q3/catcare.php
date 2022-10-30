<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PetStore Cat Care</title>
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
          <!--Cat Care area of the Webpage-->
          <div id="catcare">
            <h1>How to Take care of Your Cat</h1>
            <br />
            <br />
            <div class="catcaring">
              <br />
              <h2>THE BASICS OF CAT CARE 101</h2>
              <br />
              <span> 1- Grooming</span><br /><br />
              <cite>
                Most cats stay relatively clean and rarely need a bath, but you
                should brush or comb your cat regularly. Frequent brushing helps
                keep your cat's coat clean, reduces the amount of shedding and
                cuts down on the incidence of hairballs.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
                  >General Cat Care</a
                ></cite
              >
              by Aspca (2022). <br /><br />

              <span> 2- Feeding</span><br /><br />
              <cite>
                You will need to provide fresh, clean water at all times, and
                wash and refill your cat’s water bowls daily.
                <br />
                <a
                  href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
                  >General Cat Care</a
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
                  href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
                  >General Cat Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />

              <span> 3- Housing</span><br /><br />
              <cite>
                Your pet should have her own clean, dry place in your home to
                sleep and rest. Line your cat's bed with a soft, warm blanket or
                towel. Be sure to wash the bedding often. Please keep your cat
                indoors. Outdoor cats do not live as long as indoor cats.
                Outdoor cats are at risk of trauma from cars, or from fights
                with other cats, raccoons and free-roaming dogs. Coyotes are
                known to eat cats. Outdoor cats are more likely to become
                infested with fleas or ticks, as well as contract infectious
                diseases.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
                  >General Cat Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />

              <span> 4- Litter Box</span><br /><br />
              <cite>
                All indoor cats need a litter box, which should be placed in a
                quiet, accessible location. In a multi-level home, one box per
                floor is recommended. Avoid moving the box unless absolutely
                necessary, but if you must do so, move the box just a few inches
                per day. Keep in mind that cats won't use a messy, smelly litter
                box, so scoop solid wastes out of the box at least once a day.
                Dump everything, wash with a mild detergent and refill at least
                once a week; you can do this less frequently if using clumping
                litter. Don't use ammonia, deodorants or scents, especially
                lemon, when cleaning the litter box. If your cat will not use a
                litterbox, please consult with your veterinarian. Sometimes
                refusal to use a litter box is based on a medical condition that
                required treatment.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
                  >General Cat Care</a
                ></cite
              >
              by Aspca (2022).<br /><br />

              <span> 5- Scratching</span><br /><br />
              <cite>
                Cats need to scratch! When a cat scratches, the old outer nail
                sheath is pulled off and the sharp, smooth claws underneath are
                exposed. Cutting your cat’s nails every two to three weeks will
                keep them relatively blunt and less likely to harm the arms of
                both humans and furniture. Provide your cat with a sturdy
                scratching post, at least three feet high. The post should also
                be stable enough that it won't wobble during use, and should be
                covered with rough material such as sisal, burlap or tree bark.
                Many cats also like scratching pads.
                <br />

                <a
                  href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
                  >General Cat Care</a
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
