<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    
    <title>Exercices</title>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.php">
                        Un beau corps
<!--                        <img src="images/logo.svg" alt="Homepage">-->
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <ul class="header__nav">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="blog.php">Article</a></li>
                        <li><a href="contact.php">Contacts</a></li>
                        <li><a href="terms.php">Les conditions générales de</a></li>
                        <li><a href="policy.php">Politique de confidentialité</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <div class="row format-standard">
            <h3 class="thx">
                Merci pour votre demande!
            </h3>
        </div>
    </section> <!-- s-content -->

    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="mob-full s-footer__sitelinks">

                    <ul class="s-footer__linklist">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="blog.php">Article</a></li>
                        <li><a href="contact.php">Contacts</a></li>
                        <li><a href="terms.php">Les conditions générales de</a></li>
                        <li><a href="policy.php">Politique de confidentialité</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->


            </div>
        </div> <!-- end s-footer__main -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <div class='cookie-banner'>
        <p>
            Le site utilise des cookies. Ils vous permettent de vous reconnaître et de recevoir des informations sur votre expérience d'utilisateur.En continuant à naviguer dans le site, je suis d'accord avec l'utilisation des cookies par le propriétaire du site en conformité avec les  <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Politique de cookies</a>
        </p>
        <button class='close-cookie'>&times;</button>
    </div>
    <script>
        window.onload = function () {
            $('.close-cookie').click(function () {
                $('.cookie-banner').fadeOut();
            })
        }
    </script>
    <script>
        let elems = document.querySelectorAll('.server-name');
        elems.forEach((elem) => {
            elem.innerHTML = window.location.hostname
        })
    </script>

</body>

</html>