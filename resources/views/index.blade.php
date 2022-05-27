<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Unimagec | Home</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
   <!-- LOGO AND MENU -->

   <header id="header">
    <div class="wrapper">
        <a href="/">
                <img src="img/Logo-Unimagec.png" alt="logo">
        </a>

    <!-- MENU LINKS  -->

        <ul class="menu-left">
            <li>
                <a href="#">How we function?</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Pricing</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
        <ul class="menu-right">
            <li class="menu-cta">
                <a href="#">
                    Get Started
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- LOGO AND MENU END -->



<!-- INTRO PAGE -->


<section id="intro">
    <div class="top-right-gradient"></div>
    <div class="wrapper">
        <div class="intro-left">    
            <h1>BIENVENU CHEZ NOUS</h1>
            <p>
                The world’s most widely deployed real-time content recommendations engine. Brought to you by Pulse.
            </p>
            <div>
            <a href="/login" class="intro-cta" >
                login as user
            </a>
            <a href="/login" class="intro-cta" >
                login as admin
            </a>
            </div>
           
        </div>
        <div class="intro-right">
            <!-- Insert Image here -->
            <img src="img/homeImg.png" alt="image" >
        </div>
    </div>
    <div class="bottom-left-gradient"></div>
</section>

<!-- Intro Page END -->


<!-- About Page Start 

<section id="about">
    <div class="wrapper">
        <div class="about-left">
            <img src="img/homeImg.png" alt="img">
        </div>

        <div class="about-right">
            <h1>How we help YOU grow your Business</h1>
            <p>
                Consume out-of-the-box data analytics anywhere, anytime. Take advantage of rich domain content , pre-built industry metrics, stunning visualizations, and data adaptors for cloud/business applications as well as big data sources.

            </p>
            <a href="#" class="cta">Learn More</a>
        </div>
    </div>

    <div class="top-right-gradient"></div>
</section>

___About Page END -->

<!-- Page Banner START 

<div class="page-banner">
    <h1>Analytics Made Easy</h1>
    <h3>Experience the next generation Analytics</h3>
    <a href="#">Get Started</a>
</div>

 Banner END -->


<!-- FOOTER START

<footer>

    <div class="wrapper">

        <div class="footer-left">

            <a href="/">
                <img src="images/logo2.png" alt="logo">
            </a>

            <p class="footer-links">

                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Pricing</a>
                <a href="#">Contact</a>

            </p>

            <p class="footer-company-name"> Pulse Analytics &copy; 2019 - Made By Design Medium</p>

        </div>

        <div class="footer-center">

            <div>

                <i class="fas fa-map-marker-alt"></i>
                <p><span> 965 Central Rd.</span>Lakewood, NJ 08701</p>

            </div>

            <div>

                <i class="fas fa-phone"></i>
                <p><span> +1 555 12342342</p>

            </div>

            <div>

                <i class="fas fa-envelope"></i>
                <p><a href="#">DesignMedium@company.com</a></p>

            </div>

        </div>

        <div class="footer-right">

            <p class="footer-connect">
                <span> Connect with us</span>
                Consume out of the box data Analytics anwhere, anytime. Contact us to get Started.
            </p>

            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>

            </div>

        </div>
    </div>



</footer>-->

<script>

    function showMenu(event){

        event.preventDefault();

        let element = document.getElementById('header');

        if(element.classList.contains('active')){
            element.className = "";
        } else {
            element.className = "active";
        }


    }

</script>

</html>