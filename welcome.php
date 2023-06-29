<?php

error_reporting(0);

// Start session
session_start();

// Check if the user is not logged in, then redirect the user to the login page:
    if(!isset($_SESSION["lastname"]) !== true) {
       header('location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Welcome <?php echo $_SESSION["firstname"]; ?>!</title>
        <link rel="stylesheet" href="./css/styleSheet.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <script src="https://kit.fontawesome.com/bad3a99581.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    </head>

    <body>

    <!--Header-->
    <header>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#about">About</a></li>
            <li><a href="#values">Values</a></li>
            <li><a href="#bigcom">BigCommerce</a></li>
            <li><a href="#diversity">Diversity</a></li>
            <li><a href="#locations">Locations</a></li>
            <!--<li><a href="#others">Other</a></li>-->
            <li><a href="logout.php">Sign Out</a></li>
        </ul>
    </header>
    
    <h1>Hello, <strong><?php echo $_SESSION["firstname"]; ?></strong>!</h1>
    <!--About Us section-->
    <section class="about" id="about">

        <!--About image-->
        <div class="about-img">
                <img src="img/bigcommerce.png" height="100%" width="100%">
        </div>

        <!--About text-->
        <div class="main-text">
            <h2>Who We Are & What We Do</h2>
            <p>BigCommerce's mission is to help merchants sell more at every stage of growth, 
            from small startups, to mid-market businesses, 
            to large enterprises. As a leading Open SaaS solution, 
            BigCommerce empowers merchants to build, innovate and grow their businesses online. 
            Simply put, we focus on being the best commerce platform so our customers can focus 
            on what matters most: growing their businesses.</p>
            <p>Learn more about our growing industry-wide recognition.</p>
        </div>
        <a href="https://www.bigcommerce.com/company/awards/">Click here</a>
    </section>

    <!--===========================================================-->
    <!--Company Values section-->
    <section class="values" id="values">

        <!--# text-->
        <div class="values-text">
            <div class="main-text">
                <h2>Our Company Values</h2>
                <p>These are the core principles upon which BigCommerce was built, guiding what we do 
                and how we do it. Each employee learns them, loves them and lives them. 
                Our merchants benefit from them every time they use our product or get help 
                from our Support team.</p>
            </div>

            <div class="values-content">

                <div class="box">
                    <h3>Customers First</h3>
                    <p>Our company exists to help merchants sell more. We make every decision and 
                    measure every outcome based on how well it serves our customers.</p>
                </div>

                <div class="box">
                    <h3>Team on a Mission</h3>
                    <p>BigCommerce is made up of amazing individuals, but it's only through teamwork 
                    that we achieve greatness. We're committed to helping our customers by working 
                    together with equal parts humility and ambition.</p>
                </div>

                <div class="box">
                    <h3>Think Big</h3>
                    <p>Being the world's leading commerce platform requires unrivaled vision, 
                    innovation and execution. We never settle. We challenge our ideas of 
                    what's possible to better meet the needs of our customers.</p>
                </div>

                <div class="box">
                    <h3>Act with Integrity</h3>
                    <p>We're honest, transparent and committed to doing what's best for our customers and 
                    our company. We openly collaborate in pursuit of the truth. We have no tolerance 
                    for politics, hidden agendas or passive-aggressive behavior.</p>
                </div>

                <div class="box">
                    <h3>Make a Difference Every Day</h3>
                    <p>We constantly push ourselves to be our best. We focus on solutions and arrive every day 
                    inspired to make an impact through our talents, passion and hard work.</p>
                </div>

            </div>
        </div>

    </section>

    <!--===========================================================-->
    <!--BigCommerce section-->
    <section class="bigcom" id="bigcom">

        <!--# text-->
        <div class="bigcom-text">
            <div class="main-text">
                <h2>Inside BigCommerce</h2>
                <p>Our employees bring the BigCommerce mission to life by empowering a community of 
                merchants to reach their fullest potential. We believe in the same unlimited 
                potential for our employees. </p>

                <p>At BigCommerce, employees own their personal development through hands-on experience, 
                stepping up to new opportunities, and the chance to contribute on projects that 
                are redefining the ecommerce industry. </p>

                <p>Here's what a day in the life of a BigCommerce employee looks like.</p>

                <div class="bigcom-img">
                    <img src="img/inside.jpg" height="100%" width="100%">
                </div>
            </div>

        </div>

    </section>

    <!--===========================================================-->
    <!--Diversity & Inclusion section-->
    <section class="diversity" id="diversity">

        <!--# text-->
        <div class="diversity-text">

            <div class="main-text">
                <h2>Diversity & Inclusion</h2>
                <p>Our dedication to diversity and inclusion is grounded in the moral belief in the dignity, 
                value, and potential of every individual, and a practical belief that diverse, 
                inclusive teams will create the best outcomes for our customers, partners, 
                employees, and company. We welcome everyone to be a part of our journey.</p>
            </div>

                <div class="diversity-content">
                    <div class="box">
                        <h3>Belonging</h3>
                        <p>We foster a culture that encourages the inclusion of every employee by celebrating 
                        our individuality and our common values that bring us together. We strive to create 
                        an environment in which all employees can bring their whole, best, authentic selves 
                        to work and for everyone to feel a sense of acceptance and encouragement to come as 
                        they are.</p>
                    </div>

                    <div class="box">  
                        <h3>Respect</h3>
                        <p>Our differences make us unique and create the diversity we value. We commit to creating an 
                        environment where each of us is treated with response and dignity and the expression of 
                        each individual's perspective, thoughts and ideas is encouraged.</p>
                    </div>

                    <div class="box"> 
                        <h3>Equal Opportunity</h3>
                        <p>Greatness is inherent in all people, no matter their demographic background or personal 
                        experiences. We will  take action to ensure that every individual has an equal 
                        opportunity to grow and achieve their maximum potential.</p>
                    </div>

                </div>

        </div>

    </section>

    <!--===========================================================-->
    <!--Locations section-->
    <section class="locations" id="locations">

        <!--# text-->
        <div class="locations-text">

            <div class="main-text">
                <h2>Our Locations</h2>
                <p>We have modern offices around the world in many vibrant cities. Each has its own 
                personality with smart, talented people who are dedicated to our customers and 
                company success.</p>
            </div>
            
            <div class="locations-content">
                <div class="box">
                    <div class="texas-img">
                        <img src="img/texas.jpg" height="15%" width="15%">
                    </div>
            
                    <h3>Austin, Texas / Four Points</h3>
                    <p>Our headquarters is set amongst trees and nature trails in the beautiful hills of Austin. 
                    We're located only miles from the live music capital of Texas that is downtown and just 
                    a few minutes from the leisure and sporting fun of Lake Travis. The offices of Four 
                    Points is home to the BigCommerce Sales, Support, Operations, G&A Support, 
                    Marketing and Design teams.</p>
                </div>

                <div class="box">
                    <div class="california-img">
                        <img src="img/california.jpg" height="15%" width="15%">
                    </div>
            
                    <h3>San Francisco, California</h3>
                    <p>Our San Francisco office is in the heart of the Financial District, close to a BART stop 
                    and surrounded by great coffee shops, restaurants and bars. Designed from the get-go 
                    to host Tech Talks, we frequently bring in industry leaders to discuss the latest 
                    trends in commerce technology.</p>
                </div>

                <div class="box">
                    <div class="sidney-img">
                        <img src="img/sidney.jpg" height="15%" width="15%">
                    </div>

                    <h3>Sydney, Australia</h3>
                    <p>Our Sydney office is situated in the CBD. It's around the corner from Central Station, 
                    Chinatown and Darling Harbour, and a short stroll from great cafes, pubs, parks and 
                    restaurants. Our office reflects our innovative, unique, well-balanced and vibrant 
                    surroundings.</p>
                </div>

                <div class="box">
                    <div class="london-img">
                        <img src="img/london.jpg" height="15%" width="15%">
                    </div>

                    <h3>London, United Kingdom</h3>
                    <p>The BigCommerce London office is home to a thriving Sales, Marketing and Professional 
                    Services teams. It's centrally located in the hustle and bustle of the city near the 
                    St. Paul's Cathedral, London Bridge and the Tate Museum.</p>
                </div>

                <div class="box">
                    <div class="kyiv-img">
                        <img src="img/kyiv.jpg" height="15%" width="15%">
                    </div>

                    <h3>Kyiv, Ukraine</h3>
                    <p>Our Kyiv site can be found in the Shevchenkivskyi district near one of the most beautiful 
                    historical areas, Podil, just off the Dnipro river. Close to the heart of the city, it is 
                    just a few minutes' walk from parks, restaurants, cafes, and coffee shops as well as the 
                    metro line, Dorohozhychi.</p>
                </div>

            </div>

        </div>

    </section>

    <!--===========================================================-->
    <!--Other section-->
    <section class="others" id="others">

        <!--Others text-->
        <div class="others-text">
            <h2>Want to learn more about BigCommerce and our career opportunities?</h2>
            <p>Here at BigCommerce, we're interested in sharing who we are and the exciting plans we 
                have for redefining the ecommerce industry. Join our BigNetwork to stay up to date on 
                BigCommerce news, events, and potential career opportunities.</p>
                <div class="others-link">
                    <li><a href="https://pages.beamery.com/bigcommerce/page/bignetwork">JOIN OUR BIGNETWORK</a></li>
                </div>
        </div>

    </section>

    <!--Last text-->
    <div class="last-text">
            <p>Developed by Jose  Munoz 2023</p>
            <div class="social">
            <a href="https://www.linkedin.com/in/jose-munoz90/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/JoseMunoz9"><i class='bx bxl-github'></i></a>
            </div>
            <p class="end">CopyRight by Jose Munoz 2023</p>
    </div>

    <!--Scroll-top-->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>

    <script src="https://unpkg.com/scrollreveal"></script>

    <!--Custom js link-->
    <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>