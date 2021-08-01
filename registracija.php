<?php
require 'konekcija.php';

   if(!require_once('konekcija.php'))
   {
       die("Učitavanje fajla za konekciju nije uspleo");
   }

   $upit = "SELECT * FROM clanovi";
   $rezultat = $conn->query($upit);
   if(isset($_POST['btnSubmit'])){
    $ime_prezime=$_POST['ime_prezime'];
    $email=$_POST['email'];
    $lozinka=$_POST['lozinka'];
    $adresa=$_POST['adresa'];
    $ime_prezime= mysqli_real_escape_string($conn, $ime_prezime);
    $email= mysqli_real_escape_string($conn, $email);
    $lozinka= mysqli_real_escape_string($conn, $lozinka);
    $adresa= mysqli_real_escape_string($conn, $adresa);
    $upit=" INSERT INTO clanovi (ime_prezime,email,lozinka,adresa) VALUES ('{$ime_prezime}','{$email}','{$lozinka}','{$adresa}')";
    mysqli_query($conn,$upit);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="assets/images/registracija-meta.png">
  <meta property="og:image" content="assets/images/registracija-meta.png">
  <meta name="twitter:title" content="Book Online - Registracija">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/book-online-121x78.png" type="image/x-icon">
  <meta name="description" content="Ovde se možete registrovati.">
  
  
  <title>Book Online - Registracija</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/recaptcha.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  

</head>
<body>
  
  <section class="menu cid-sDkkbnKXRG" once="menu" id="menu02-y">
    


    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="navbar-brand">
            <span class="navbar-logo">
                
                    <img src="assets/images/book-online-121x78.png" alt="book-online" style="height: 3.8rem;">
                
            </span>
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="index.php" aria-expanded="false">
                        POČETNA</a></li>
                <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-info display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu">
                        BIBLIOTEKA</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-info text-primary display-4" href="knjige.php" aria-expanded="false">Knjige</a>
                        <a class="dropdown-item text-info text-primary display-4" href="zanrovi.php" aria-expanded="false">Žanrovi</a>
                        <a class="dropdown-item text-info text-primary display-4" href="korisnici.php" aria-expanded="false">Korisnici</a>
                    </div>
                </li></ul>
            
            <div class="navbar-buttons px-2 mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="kontakt.php">
                    KONTAKT</a></div>
        </div>
    </nav>
</section>

<section class="form cid-sDloiI92PP" id="forms01-1m">
    
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">

        <div class="col-lg-10 col-md-12  my-auto pb-4 mbr-form">
<!--Formbuilder Form-->
<form action="" method="post" class="mbr-form form-with-styler" data-form-title="Form Name">
<div class="form-row">
<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Uspesno ste se učlanili u biblioteku.</div>
<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
</div>
<div class="dragArea form-row">
<div class="col-lg-12">
<h5 class="mbr-fonts-style display-2">Registracija</h5>
</div>
<div class="col-lg-12 form-group" data-for="Ime i prezome">
<label for="Ime i prezome-forms01-1m" class="form-control-label mbr-fonts-style display-7">Ime i prezime</label>
<input type="text" name="ime_prezime" placeholder="Ime i prezime" data-form-field="Ime i prezome" required="required" class="form-control display-7" value="" id="Ime i prezome-forms01-1m">
</div>
<div data-for="Email" class="col-lg-6 form-group">
<label for="Email-forms01-1m" class="form-control-label mbr-fonts-style display-7">Email</label>
<input type="email" name="email" placeholder="Email" data-form-field="Email" class="form-control display-7" required="required" value="" id="Email-forms01-1m">
</div>
<div data-for="Lozinka" class="col-lg-6 col-md-12 col-sm-12 form-group">
<label for="Lozinka-forms01-1m" class="form-control-label mbr-fonts-style display-7">Lozinka</label>
<input type="password" name="lozinka" placeholder="Lozinka" data-form-field="Lozinka" class="form-control display-7" value="" id="Lozinka-forms01-1m">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="Adresa">
<label for="Adresa-forms01-1m" class="form-control-label mbr-fonts-style display-7">Adresa</label>
<input type="text" name="adresa" placeholder="Adresa" data-form-field="Adresa" class="form-control display-7" value="" id="Adresa-forms01-1m">
</div>
<div class="col-auto">
<button type="submit" name="btnSubmit" class="btn btn-primary display-7">POŠALJI</button>
</div>
</div>
</form><!--Formbuilder Form-->
</div>



        </div>

    </div>
</section>

<section class="extTable section-table cid-sDloJJMc1o" id="extTable1-1n">

 <!-- plugins="dataTables"  -->

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(228, 255, 245);">
    </div>
    <div class="container">
        <div class="media-container-row align-center">
            <div class="col-12 col-md-12">
                <h2 class="mbr-section-title mbr-fonts-style mbr-black pb-100 display-2">
                    Članovi</h2>
                
                <div class="table-wrapper">
                    <div class="container scroll">
                        <table class="table  mx-auto" cellspacing="0">
                            <thead>
                                <tr class="table-heads">
                                    
                                    
                                    
                                    
                                    
                                    
                                <th class="head-item mbr-fonts-style display-5">ID</th><th class="head-item mbr-fonts-style display-5">Ime i prezime</th><th class="head-item mbr-fonts-style display-5">Email</th><th class="head-item mbr-fonts-style display-5">Lozinka</th><th class="head-item mbr-fonts-style display-5">Adresa</th></tr>
                            </thead>

                            <tbody>
                                <?php while($red = $rezultat->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $red['id']; ?></td>
                                        <td><?= $red['ime_prezime']; ?></td>
                                        <td><?= $red['email']; ?></td>
                                        <td><?= $red['lozinka']; ?></td>
                                        <td><?= $red['adresa']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="extFooter cid-sDkkbs7g0S" id="extFooter9-14">

    

    
       <div class="container-fluid text-center">
           <div class="row justify-content-center">
             <div class="col-md-6 col-sm-12">
                 <h3 class="inner-text mbr-fonts-style content-text display-7">Aplikaciju izradio <a href="https://kreativan-sajt.com/" class="text-primary">Kreativan Sajt</a>. Sva prava zadržana.</h3>
             </div>
             <div class="social-media col-md-6 col-sm-12">
                  <ul>
                      <li>
                        <a class="icon-transition" href="https://www.facebook.com/Kreativan-Sajt-135185568009399">
                          <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                      </li>
                      <li>
                        <a class="icon-transition" href="https://www.instagram.com/_kreativan_sajt_/">
                          <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                      </li>
                      
                      
                      
                   </ul>
              </div>
    </div>
       </div>

</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/formstyler/jquery.formstyler.js"></script>
  <script src="assets/formstyler/jquery.formstyler.min.js"></script>
  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid.min.js"></script>
  
  
  

</body>
</html>