function getCurrentDate() {
  var dayOfWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  var monthOfYear = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  var today = new Date();
  var ref = 1000;
  let time =
    today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var date =
    dayOfWeek[today.getDay()] +
    ", " +
    monthOfYear[today.getMonth()] +
    " " +
    today.getDate() +
    ", " +
    today.getFullYear();
  document.getElementById("date").innerHTML = time + " " + date;
  setTimeout(getCurrentDate, 1000);
}

function validateForm1() {
  var dog = document.getElementById("dog");
  var cat = document.getElementById("cat");
  var breeddog = document.getElementById("breeddog1");
  var agedog = document.getElementById("agedog1");
  var genderdog = document.getElementById("genderdog1");
  var alongdog = document.getElementById("alongdog");
  var nonealongdog = document.getElementById("alongchilddog");
  var nonealongdog = document.getElementById("nonealongdog");
  var breedcat = document.getElementById("breedcat1");
  var agecat = document.getElementById("agecat1");
  var gendercat = document.getElementById("gendercat1");
  var alongcat = document.getElementById("alongcat");
  var alongchildcat = document.getElementById("alongchildcat");
  var nonealongcat = document.getElementById("nonealongcat");

  if (!dog.checked && !cat.checked) {
    alert("Please choose select one of the options Dog or Cat");
    return false;
  }

  if (dog.checked && cat.checked) {
    alert("Please choose select one of the options Dog or Cat only not both");
    return false;
  }

  if (dog.checked) {
    if (breeddog.value == "") {
      alert("Please select a breed of Dog");
    }
    if (agedog.value == "") {
      alert("Please select a prefered age of Dog");
    }
    if (genderdog.value == "") {
      alert("Please select a prefered gender of Dog");
    }
    if (!alongdog.checked && !alongchilddog.checked && !nonealongdog.checked) {
      alert("Please choose select one for gets along");
    }
  }

  if (cat.checked) {
    if (breedcat.value == "") {
      alert("Please select a breed of Cat");
    }
    if (agecat.value == "") {
      alert("Please select a prefered age of Cat");
    }
    if (gendercat.value == "") {
      alert("Please select a prefered gender of Cat");
    }
    if (!alongcat.checked && !alongchildcat.checked && !nonealongcat.checked) {
      alert("Please choose select one for gets along");
    }
  }
}

function validateForm2() {
  var dog = document.getElementById("givedog");
  var cat = document.getElementById("givecat");
  var breed = document.getElementById("givebreed");
  var age = document.getElementById("giveage");
  var gender = document.getElementById("givegender");
  var alongcat = document.getElementById("othercat");
  var alongdog = document.getElementById("otherdog");
  var alongchild = document.getElementById("children");
  var alongnone = document.getElementById("alongnone");
  var yes = document.getElementById("yes");
  var no = document.getElementById("no");
  var comment = document.getElementById("comment");
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");

  if (!dog.checked && !cat.checked) {
    alert("Please choose select one of the options Dog or Cat");
    return false;
  }

  if (dog.checked && cat.checked) {
    alert("Please choose select one of the options Dog or Cat only not both");
    return false;
  }

  if (dog.checked || cat.checked) {
    if (breed.value == "") {
      alert("Please select the breed of the pet");
    }
    if (age.value == "") {
      alert("Please select the age group of the pet");
    }
    if (gender.value == "") {
      alert("Please select the gender group of the pet");
    }
    if (
      !alongcat.checked &&
      !alongdog.checked &&
      !alongchild.checked &&
      !alongnone.checked
    ) {
      alert("Please choose select one for gets along");
    }

    if (
      alongnone.checked &&
      (alongcat.checked || alongdog.checked || alongchild.checked)
    ) {
      alert("Please choose either if the pet gets along or not and not both");
    }

    if (!yes.checked && !no.checked) {
      alert(
        "Please select yes or no for if it is suitable for a family with small children"
      );
    }

    if (yes.checked && no.checked) {
      alert(
        "Please select only yes or no for if it is suitable for a family with small children"
      );
    }

    if (comment.value == "") {
      alert("Please leave a short comment about your pet");
    }

    if (fname.value == "") {
      alert("Please enter your First Name");
    }

    if (lname.value == "") {
      alert("Please enter your Last Name");
    }

    if (email.value == "") {
      alert("Please enter your Email");
    }
  }

  return true;
}

function clear1() {
  document.getElementById("form1").reset();
}

function clear2() {
  document.getElementById("form2").reset();
}

var index = 1;

function changeImg(pos) {
  showImg((index += pos));
}

function showImg(pos) {
  var img = document.getElementsByClassName("petslide");
  if (pos > img.length) {
    index = 1;
  }
  if (pos < 1) {
    index = img.length;
  }
  for (var i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }
  img[index - 1].style.display = "block";
}
