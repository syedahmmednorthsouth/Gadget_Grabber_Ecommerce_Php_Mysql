<?php
require_once "Includes/DB.php";
require_once "Includes/Sessions.php";
require_once "Includes/Functions.php";
?>

<?php
if (isset($_POST["Submit"])) {
  $Username = $_POST["Username"];
  $Name = $_POST["Name"];
  $Password = $_POST["Password"];
  $ConfirmPassword = $_POST["ConfirmPassword"];
  $Admin = "Syed";
  date_default_timezone_set("Asia/Dhaka");
  $CurrentTime = time();

  $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

  if (empty($Username) || empty($Password) || empty($ConfirmPassword)) {
    $_SESSION["ErrorMessage"] = "All Fields must be filled out";
    Redirect_to("signup.php");
  } elseif (strlen($Password) < 4) {
    $_SESSION["ErrorMessage"] = "At least 4 Characters For Password are required";
    Redirect_to("signup.php");
  } elseif ($Password !== $ConfirmPassword) {
    $_SESSION["ErrorMessage"] = "Password and ConfirmPassword does not match";
    Redirect_to("signup.php");
  } else {
    // } elseif (CheckUserNameExistsOrNot($Username)) {
    //   $_SESSION["ErrorMessage"] = "Username Exists. Try another one";
    //   Redirect_to("signup.php");
    // } else {
    global $ConnectingDB;
    $sql = "INSERT INTO customers(datetime,username,password,aname,addedby)";
    $sql .= "VALUES(:dateTime,:userName,:password,:aName,:adminName)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':dateTime', $DateTime);
    $stmt->bindValue(':userName', $Username);
    $stmt->bindValue(':password', $Password);

    $stmt->bindValue(':aName', $Name);
    $stmt->bindValue(':adminName', $Admin);

    $Execute = $stmt->execute();

    if ($Execute) {
      $_SESSION["SuccessMessage"] = "Admin  Added Successfully";
      Redirect_to("signup.php");
    } else {
      $_SESSION["ErrorMessage"] = "Something went wrong";
      Redirect_to("signup.php");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!--Bootstarp CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!--owl Carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--font awesome cdn-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Custom CSS file-->
  <link rel="stylesheet" href="style.css" />


  <!-- <?php

        require "functions.php";

        ?> -->
</head>

<body>
  <!--start #header-->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-i bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0">
        po-2280, Rayerbazar, Atharbari, Mymensingh, Dhaka
      </p>
      <div class="font-rale font-size-14">
        <a href="./signup.html" class="px-3 border-right text-dark">Sign-Up</a>
        <a href="#" class="px-3 border-right border-left text-dark">Login</a>
        <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
        <input type="submit" value="">
      </div>
    </div>

    <!--Primary Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Gadget Grabber</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">On Sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory <i class="fas fa-chevron-down"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Comming Soon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form action="#" class="font-size-14 font-rale">
            <a href="#" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
              <span class="px-3 py-2 rounded-pill text-dark bg-light">
                0
              </span>
            </a>
          </form>
        </div> -->
      </div>
    </nav>

    <!--!Primary Navigation-->
  </header>

  <!--!start #header-->

  <!--start #main-site-->

  <main id="main-site">

  </main>

  <!--!start #main-->
  <section class="container py-2 mb-4">
    <div class="row">
      <div class="offset-lg-1 col-lg-10">
        <?php echo ErrorMessage();
        echo SuccessMessage();
        ?>
        <form action="signup.php" method="post">
          <div class="card color-yellow-bg text-light mb-3">
            <div class="card-header font-baloo">
              <h3>Customer Registration</h3>
            </div>
            <div class="card-body bg-dark">

              <div class="form-group font-rubik">
                <label for="title"><span class="FieldInfo">Username:</span> </label>
                <input class="form-control" type="text" name="Username" id="title" placeholder="Type title hear" value="">
              </div>
              <div class="form-group font-rubik">
                <label for="title"><span class="FieldInfo">Name:</span> </label>
                <input class="form-control" type="text" name="Name" id="title" placeholder="Type title hear" value="">
                <small class="text-muted">*Optional</small>
              </div>
              <div class="form-group font-rubik">
                <label for="title"><span class="FieldInfo">Password:</span> </label>
                <input class="form-control" type="password" name="Password" id="title" placeholder="Type title hear" value="">
              </div>
              <div class="form-group font-rubik">
                <label for="title"><span class="FieldInfo">Confirm Password:</span> </label>
                <input class="form-control" type="password" name="ConfirmPassword" id="title" placeholder="Type title hear" value="">
              </div>
              <div class="row">
                <div class="col-log-6 mb-2 ml-4">
                  <a href="Login.php" class="btn btn-warning btn-block"> <i class="fas fa-arrow-left"></i> Back to Login</a>
                </div>
                <div class="col-lg-6 mb-2">
                  <button type="submit" name="Submit" class="btn color-second-bg btn-black">
                    <i class="fas fa-arrow-check"></i>Registar</button>
                </div>


              </div>


            </div>
          </div>
        </form>
      </div>

    </div>
  </section>


  <!--start #footer-->



  <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4 class="font-rubik font-size-20">Gadget Grabber</h4>
          <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Repellendus, deserunt.</p>
        </div>
        <div class="col-lg-4 col-12">
          <h4 class="font-rubik font-size-20">Newslatter</h4>
          <form class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Email *">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-size-20">Information</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
          </div>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-size-20">Account</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright text-center bg-dark text-white py-2">
    <!-- <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p> -->
  </div>

  </footer>

  <!--!start #footer-->



  <!------------------------>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <!---------------------->

  <!--owl carosel js file-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--isotop plugin cdn-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--Custom Javascript-->
  <script src="./index.js"></script>
</body>

</html>