<?php

require 'konekcija.php';

session_start();
   if(!require_once('konekcija.php'))
   {
       die("Učitavanje fajla za konekciju nije uspleo");
   }

   $upit = "SELECT * FROM zanr";
   $rezultat = $conn->query($upit);
   if(isset($_POST['btnSubmit'])){
    $naziv_zanra=$_POST['naziv_zanra'];
    $broj_knjiga=$_POST['broj_knjiga'];
    $naziv_zanra= mysqli_real_escape_string($conn, $naziv_zanra);
    $broj_knjiga= mysqli_real_escape_string($conn, $broj_knjiga);
    $upit="INSERT INTO zanr (naziv_zanra,broj_knjiga) VALUES ('{$naziv_zanra}','{$broj_knjiga}')";
    mysqli_query($conn,$upit);
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="assets/images/zanrovi-meta.png">
    <meta property="og:image" content="assets/images/zanrovi-meta.png">
    <meta name="twitter:title" content="Book Online - Žanrovi">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/book-online-121x78.png" type="image/x-icon">
    <meta name="description" content="Ovde možete videti žanrove svih naših knjiga.">


    <title>Book Online - Žanrovi</title>
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

    <section class="menu cid-sDkg564qUq" once="menu" id="menu02-6">



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

    <section class="extСontent cid-sDknEcIFN1" id="extContent10-1c">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 title-col m-auto align-left">
                    <div class="text-wrap align-left">
                        <h2 class="mbr-section-title pb-4 mbr-semibold mbr-white mbr-fonts-style display-2">Trileri</h2>
                        <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">Triler je filmski,
                            televizijski i književni žanr prepun napetosti i iznenađenja. Trileri jako stimulišu
                            gledaočevo rasploženje, pružajući mu osećaje napetosti, uzbuđenja, iznenađenja, iščekivanja
                            i strepnje.[1][2] Uspešni primeri trilera su filmovi Alfreda Hičkoka.<br>
                            <br>Trileri generalno drže gledaoce ''na ivici'' dok se radnja filma približava svom
                            vrhuncu. Skrivanje važnih informacija je uobičajen element.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 img-col">
                    <img class="img2" src="assets/images/mbr-1437x958.jpg" alt="Trileri">
                </div>

            </div>
        </div>
    </section>

    <section class="extСontent cid-sDkp3qLVVe" id="extContent10-1d">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 title-col m-auto align-left">
                    <div class="text-wrap align-left">
                        <h2 class="mbr-section-title pb-4 mbr-semibold mbr-white mbr-fonts-style display-2">Ljubavni
                            romani</h2>
                        <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">Ljubavni roman,
                            nekada pogrdno nazvan i ljubić, je vrsta romana, odnosno žanrovske fikcije čija glavna tema
                            su osećanja glavnih junaka. To je najčešće lako štivo, često prepuno dijaloga, kako bi
                            čitalac mogao lakše da se uživi u priču. Mnogi kritičari zameraju vrlo lak rani uvid u
                            rasplet događaja. U svojoj priči često ima i velik broj humorističnih događaja koji se
                            odlično utjelovljuju u priču. Osim osećanja, kao glavnog motiva priče, ljubavni roman može
                            sadržati i druge motive, kakvi se nalaze u kriminalističkim, naučno fantastičnim i drugim
                            vrstama romana. Ljubavni roman ne gubi na popularnosti, a posebno je omiljen među ženskom
                            publikom. Velik broj ljubavnih romana tokom godina su postali književni klasici</p>
                    </div>
                </div>
                <div class="col-lg-6 img-col">
                    <img class="img2" src="assets/images/mbr-1437x954.jpg" alt="Ljubavni romani">
                </div>

            </div>
        </div>
    </section>

    <section class="extСontent cid-sDkp4gqZBY" id="extContent10-1e">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 title-col m-auto align-left">
                    <div class="text-wrap align-left">
                        <h2 class="mbr-section-title pb-4 mbr-semibold mbr-white mbr-fonts-style display-2">Istorijski
                            romani</h2>
                        <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">Istorijski roman
                            je roman u kojem radnja smeštena u prošlosti. Likovi i radnja mogu biti povezani sa stvarnim
                            događajima, ili pak inkorporirati likove ili elemente stvarnih istorijskih ličnosti u svoju
                            radnju, ali da se on ne nameće kao glavna tema.
                            <br>
                            <br>Mnogi istorijski romani zapravo bitne istorijske činjenice ili trenutak u vremenu u koji
                            je roman smešten postavljaju na rubove radnje. Oni su manje bitni i služe ponekad kao
                            pozadina dok je glavni lik fiktivna osoba koja živi svoj život u svetu oblikovanim tim
                            konkretnim istorijskim uslovima unutar kojih doživljava svoje zgode i nezgode.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 img-col">
                    <img class="img2" src="assets/images/mbr-1437x940.jpg" alt="istorijski romani">
                </div>

            </div>
        </div>
    </section>

    <section class="extСontent cid-sDkp55wkRr" id="extContent10-1f">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 title-col m-auto align-left">
                    <div class="text-wrap align-left">
                        <h2 class="mbr-section-title pb-4 mbr-semibold mbr-white mbr-fonts-style display-2">Popularna
                            psihologija</h2>
                        <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7"><br>
                            <br>Već decenijama mnogobrojni pisci popularne psihologije trude se da nam manje ili više
                            duhovito i poučno objasne zašto žene govore mnogo, a muškarci malo, zašto muškarci vole
                            seks, a ženama treba ljubav, zašto žene primećuju uvek više detalja, a muškarci bolje vide
                            na daljinu, ali i na mnogo ozbiljniji način kako da razrešimo sukobe u sebi i otklonimo
                            razloge za brigu i strah, osećanje potištenosti i tuge. Poruke su uvek ohrabrujuće i
                            nedvosmislene, zagovaraju pozitivna i odstranjuju loša osećanja i neprestano nas uveravaju
                            da svi možemo da postanemo srećni – treba samo da čitamo dela popularne psihologije..
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 img-col">
                    <img class="img2" src="assets/images/mbr-1437x808.jpg" alt="Popularna psihologija">
                </div>

            </div>
        </div>
    </section>

    <section class="extСontent cid-sDkp8bOfFY" id="extContent10-1h">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 title-col m-auto align-left">
                    <div class="text-wrap align-left">
                        <h2 class="mbr-section-title pb-4 mbr-semibold mbr-white mbr-fonts-style display-2">Naučna
                            fantastika</h2>
                        <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">Naučna fantastika
                            (skrać. NF; često i SF ili sci-fi, od engl. science fiction – dosl. „naučna fikcija“[a]) je
                            književni žanr u kojem deo ili cela priča zavisi od uticaja nauke, bilo stvarnog ili
                            zamišljenog, da stvori uslove ili događaje koji se u stvarnosti još nisu desili (a koji
                            nikada i ne moraju da se dese).<br><br> Naučna fantastika je umetnički žanr koji obrađuje
                            razne opšte ljudske situacije smeštene u zamišljenu buduću realnost koja se temelji na danas
                            znanim naučnim podacima za razliku od žanra tzv. „čiste” ili fantastike u širem smislu koja
                            se ne temelji na nauci. Granice žanra nisu jasno definisane kao ni granice podžanrova. Mnoga
                            naučnofantastična dela sadrže obeležja drugih umetničkih žanrova, poput kriminalističkih
                            romana, romana strave i užasa, istorijskih romana i fantastike.<br><br> Tradicionalno se
                            smatra da su danas pokojna trojka Ajzak Asimov, Artur Č. Klark i Robert A. Hajnlajn najveći
                            književni majstori ovog žanra koji se mnogo promenio od vremena u kome su živeli, a koji se
                            često naziva „zlatnim dobom”.</p>
                    </div>
                </div>
                <div class="col-lg-6 img-col">
                    <img class="img2" src="assets/images/mbr-1437x814.jpg" alt="naučna fantastika">
                </div>

            </div>
        </div>
    </section>

    <section class="extСontent cid-sDkp6fcE56" id="extContent10-1g">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 title-col m-auto align-left">
                    <div class="text-wrap align-left">
                        <h2 class="mbr-section-title pb-4 mbr-semibold mbr-white mbr-fonts-style display-2">Horor</h2>
                        <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">Horor ili
                            fantastika (engl. Horror fiction) je pre svega literaturni, a zatim i filmski žanr sa
                            glavnim ciljem da zastraši, zgrozi ili da u čitaocu stvori osećaj užasavanja. Istoričar
                            književnosti Dž. A. Kadon je definisao horor kao „književnu prozu različite dužine... koja
                            šokira i zastrašuje, i može čak da poizvede i osećaj odbijenosti ili gađenja.“<br><br> Horor
                            žanr stvara mračnu i zastrašujuću atmosferu najčešće zasnovanu na nekoj natprirodnoj pojavi.
                            Često se centralna opasnost u nekom horor delu može interpretirati samo kao metafora i
                            prenos opštih strahova šire javnosti.
                            <br>
                            <br><br>Reč „horor“ je izraz za strah iz starijeg francuskog jezika, kada se pisao horror
                            (nasuprot modernom horreur), a poreklom je od latinske reči horror, u značenju „strahota,
                            tresenje“.[2] Horor žanr ima korene u folkloru i religioznim tradicijama vezanim za smrt,
                            zagrobni život, zlo, i mitske likove koji se u literaturi sreću kao veštice, vampiri,
                            vukodlaci ili duhovi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 img-col">
                    <img class="img2" src="assets/images/mbr-1-1437x958.jpg" alt="Horor">
                </div>

            </div>
        </div>
    </section>

    <section class="form cid-sDkg5cgQZA" id="forms01-b">

        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-12  my-auto pb-4 mbr-form">
                    <!--Formbuilder Form-->
                    <form action="" method="post" class="mbr-form form-with-styler" data-form-title="Form Name"><input
                            type="hidden" name="email" data-form-email="true"
                            value="dsgrTUiyP6adEjfE/jOAAkEmk1xrKqUjiSWxRtpk9Xqsz2+cvvsQpQKt5T20+cuWLYxUyQFUpH2k0E7OFsanhx0B4/og85rmyHb5cu/UsB0pwTniJ+kTOI4/5kIHPTIv">
                        <div class="form-row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Hvala što ste
                                popunili formu.</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                                some problem!</div>
                        </div>
                        <div class="dragArea form-row">
                            <div class="col-lg-12">
                                <h5 class="mbr-fonts-style display-2">Unesite žanr</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="ID">
                                <label for="ID-forms01-b"
                                    class="form-control-label mbr-fonts-style display-7">ID</label>
                                <input type="number" name="ID" placeholder="ID" max="100" min="0" step="1"
                                    data-form-field="ID" class="form-control display-7" value="" id="ID-forms01-b">
                            </div>
                            <div data-for="Žanr" class="col-lg-12 form-group">
                                <label for="Žanr-forms01-b"
                                    class="form-control-label mbr-fonts-style display-7">Žanr</label>
                                <input type="text" name="naziv_zanra" placeholder="Žanr" data-form-field="Žanr"
                                    class="form-control display-7" required="required" value="" id="Žanr-forms01-b">
                            </div>
                            <div data-for="Broj knjiga" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="Broj knjiga-forms01-b"
                                    class="form-control-label mbr-fonts-style display-7">Broj knjiga</label>
                                <input type="tel" name="broj_knjiga" placeholder="Broj knjiga"
                                    data-form-field="Broj knjiga" class="form-control display-7" required="required"
                                    value="" id="Broj knjiga-forms01-b">
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="btnSubmit"
                                    class="btn btn-primary display-7">POŠALJI</button>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>



            </div>

        </div>
    </section>

    <section class="extTable section-table cid-sDkzWSO3NJ" id="extTable1-1i">

        <!-- plugins="dataTables"  -->



        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(228, 255, 245);">
        </div>
        <div class="container">
            <div class="media-container-row align-center">
                <div class="col-12 col-md-12">
                    <h2 class="mbr-section-title mbr-fonts-style mbr-black pb-100 display-2">
                        Žanrovi</h2>

                    <div class="table-wrapper">
                        <div class="container scroll">
                            <table class="table  mx-auto" cellspacing="0">
                                <thead>
                                    <tr class="table-heads">






                                        <th class="head-item mbr-fonts-style display-5">ID</th>
                                        <th class="head-item mbr-fonts-style display-5">Žanr</th>
                                        <th class="head-item mbr-fonts-style display-5">Broj knjiga</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php while($red = $rezultat->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $red['id']; ?></td>
                                        <td><?= $red['naziv_zanra']; ?></td>
                                        <td><?= $red['broj_knjiga']; ?></td>
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

    <section class="extFooter cid-sDkg5dbVCU" id="extFooter9-c">




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
                            <a class="icon-transition" href="#">
                                <span class="mbr-iconfont socicon-facebook socicon"></span>
                            </a>
                        </li>
                        <li>
                            <a class="icon-transition" href="#">
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