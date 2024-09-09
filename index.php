<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || CTA</title>
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mobile-home.css">
    <link rel="stylesheet" href="css/desktop-home.css" media="only screen and (min-width : 720px)">
    <script src="javascript/main.js" defer></script>
    <script src="javascript\jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            include("inc/nav-inc.php");
        ?>
            <div class="ban-cent">
                <div class="banner">
                    <img src="imgs/logo-black.jpg" alt="banner">
                </div>
            </div>
        <div class="info-index">
            <h2>Our Music</h2>
            <div class="music">
                <!-- //youtube vid words -->
                <!-- <iframe src="https://www.youtube.com/embed/B2t5LX6xRag?si=thW4cn9-n91qAAyS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                <!-- //Dirty Bastard -->
                <!-- <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4RCdCDfdqsGusxXdYQPbNk?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe> -->
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/2HYDam9phWkedEasCeA9U9?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <h2>Upcoming Gigs</h2>
            <a href="https://www.skiddle.com/whats-on/Warrington/FC2/Big-Condo-Records-presents-Arrhythmia-3/40063311/" class="gig-link" target="_blank">
                <div class="gig-display">
                    <div class="gig-image">
                        <div class="img-container">
                            <img src="imgs/fc2-big-con-gig.png" alt="euro">
                        </div>
                    </div>
                    <div class="gig-info">
                        <div class="gig-info-cont">
                            <h2>FC2 Arrhythmia 3</h2>
                            <P>26th October, 6PM<br>Friars Court, 4B Barbauld St, Warrington WA1 1EX</P>
                            <p>£11.25</p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- <a href="https://parrhall.culturewarrington.org/whats-on/warrington-music-festival-2024/" class="gig-link" target="_blank">
                <div class="gig-display">
                    <div class="gig-image">
                        <div class="img-container">
                            <img src="imgs/wmf.png" alt="euro">
                        </div>
                    </div>
                    <div class="gig-info">
                        <div class="gig-info-cont">
                            <h2>Warrington Music Festival</h2>
                            <P>25th June, 6:30PM, Old Fish Market, Golden Square, Warrington</P>
                            <p>Free</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://www.skiddle.com/whats-on/Liverpool/The-Shipping-Forecast/Big-Condo-Records-Weekender-Crescendo-Stage/38256569/" class="gig-link" target="_blank">
                <div class="gig-display">
                    <div class="gig-image">
                        <div class="img-container">
                            <img src="imgs/sample-gig.png" alt="euro">
                        </div>
                    </div>
                    <div class="gig-info">
                        <div class="gig-info-cont">
                            <h2>Big Condo Weekender</h2>
                            <P>8th June, Shipping Forecast, Liverpool</P>
                            <p>£11</p>
                        </div>
                    </div>
                </div>
            </a> -->
        </div>
        <?php
            include("inc/foot-inc.php")
        ?>
    </div>
</body>
</html>