<?php
   if(!require_once('konekcija.php'))
   {
       die("Učitavanje fajla za konekciju nije uspleo");
   }

   $id = $_GET['id'];

   
//    if(isset($_GET['id'])){
//     $id=$_POST['id'];
//     $zanr_id=$_POST['zanr_id'];
//     $naziv_knjige=$_POST['naziv_knjige'];
//     $autor=$_POST['autor'];
//     $naziv_zanra=$_POST['naziv_zanra'];
    
    $sql = mysqli_query($conn, "DELETE FROM knjige WHERE id=$id");
	
    // if($sql)
    // {
    //     mysqli_close($conn); // Close connection
    //     header("knjige.php"); // redirects to all records page
    //     exit;
    // }
    // else
    // {
    //     echo mysqli_error();
    // }    	


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="assets/images/knjige-meta.jpg">
    <meta property="og:image" content="assets/images/knjige-meta.jpg">
    <meta name="twitter:title" content="Book Online - Knjige">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/book-online-121x78.png" type="image/x-icon">
    <meta name="description" content="Ovde možete uneti pročitane knjige.">


    <title>Book Online - Knjige</title>
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
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">





</head>

<body>
    <?php
  require_once 'konekcija.php';
  ?>
    <section class="menu cid-sDkhk8fAWG" once="menu" id="menu02-d">



        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="navbar-brand">
                <span class="navbar-logo">

                    <img src="assets/images/book-online-121x78.png" alt="book-online" style="height: 3.8rem;">

                </span>

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="index.php"
                            aria-expanded="false">
                            POČETNA</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-info display-4" href="#"
                            aria-expanded="false" data-toggle="dropdown-submenu">
                            BIBLIOTEKA</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-info text-primary display-4" href="knjige.php"
                                aria-expanded="false">Knjige</a>
                            <a class="dropdown-item text-info text-primary display-4" href="zanrovi.php"
                                aria-expanded="false">Žanrovi</a>
                            <a class="dropdown-item text-info text-primary display-4" href="korisnici.php"
                                aria-expanded="false">Korisnici</a>
                        </div>
                    </li>
                </ul>

                <div class="navbar-buttons px-2 mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                        href="kontakt.php">
                        KONTAKT</a></div>
            </div>
        </nav>
    </section>

    <section class="form cid-sDkhkbyrsV" id="forms01-i">

        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-12  my-auto pb-4 mbr-form">
                    <!--Formbuilder Form-->
                    <form action="" method="post" class="mbr-form form-with-styler" data-form-title="Form Name"><input
                            type="hidden" name="email" data-form-email="true"
                            value="yUlqV8AV3KOFPzXQQ+11jkp812MODTq9OExCgnRMiJpc6McLdjrgsDKYt11rPWgOirPQpPbw4r98Vv+qDzcHz0YHbiqQX7JcgqtiSHX+AByjh09NncUUU7nrYxu0QjLy">
                        <div class="form-row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Uspesno ste se
                                učlanili u biblioteku.</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                                some problem!</div>
                        </div>
                        <div class="dragArea form-row">
                            <div class="col-lg-12">
                                <h5 class="mbr-fonts-style display-2">Obrišite knjigu</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="ID">
                                <label for="ID-forms01-i"
                                    class="form-control-label mbr-fonts-style display-7">ID</label>
                                <input type="number" name="id" placeholder="ID" max="100" min="0" step="1"
                                    data-form-field="ID" class="form-control display-7" value="" id="ID-forms01-i">
                            </div>
                            <div data-for="Broj žanra" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="Broj žanra-forms01-i"
                                    class="form-control-label mbr-fonts-style display-7">Broj žanra</label>
                                <input type="number" name="zanr_id" placeholder="Broj žanra"
                                    data-form-field="Broj žanra" class="form-control display-7" max="100" min="0"
                                    step="1" value="" id="Broj žanra-forms01-i">
                            </div>
                            <div data-for="Naziv knjige" class="col-lg-12 form-group">
                                <label for="Naziv knjige-forms01-i"
                                    class="form-control-label mbr-fonts-style display-7">Naziv knjige</label>
                                <input type="text" name="naziv_knjige" placeholder="Naziv knjige"
                                    data-form-field="Naziv knjige" class="form-control display-7" required="required"
                                    value="" id="Naziv knjige-forms01-i">
                            </div>
                            <div data-for="Autor" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="Autor-forms01-i"
                                    class="form-control-label mbr-fonts-style display-7">Autor</label>
                                <input type="text" name="autor" placeholder="Autor" data-form-field="Autor"
                                    class="form-control display-7" value="" id="Autor-forms01-i">
                            </div>
                            <div data-for="Naziv žanra" class="col-lg-12 col-md-12 col-sm-12 form-group" style="">
                                <label for="Naziv žanra-forms01-i"
                                    class="form-control-label mbr-fonts-style display-7">Naziv žanra</label>
                                <input type="text" name="naziv_zanra" placeholder="Naziv žanra"
                                    data-form-field="Naziv žanra" class="form-control display-7" value=""
                                    id="Naziv žanra-forms01-i">
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="btnSubmit" class="btn btn-primary display-7">OBRIŠI</button>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>



            </div>

        </div>
    </section>


    <section class="extFooter cid-sDkhkbYdJj" id="extFooter9-j">




        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <h3 class="inner-text mbr-fonts-style content-text display-7">Aplikaciju izradio <a
                            href="https://kreativan-sajt.com/" class="text-primary">Kreativan Sajt</a>. Sva prava
                        zadržana.</h3>
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