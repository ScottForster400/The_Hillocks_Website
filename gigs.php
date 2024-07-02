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
        
        <div class="info">
            <h2>Upcoming Gigs</h2>
            <a href="https://www.eventbrite.com/e/pierfest-2024-tickets-805258859927" class="gig-link" target="_blank">
                <div class="gig-display">
                    <div class="gig-image">
                        <div class="img-container">
                            <img src="imgs/pier.png" alt="euro">
                        </div>
                    </div>
                    <div class="gig-info">
                        <div class="gig-info-cont">
                            <h2>Pier Fest</h2>
                            <P>25th May, 3PM, 254 Thelwall Ln, Latchford East, Warrington WA4 1NG</P>
                            <p>£16</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://parrhall.culturewarrington.org/whats-on/warrington-music-festival-2024/" class="gig-link" target="_blank">
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
            </a>
        </div>
        <?php
            include("inc/foot-inc.php")
        ?>
    </div>
</body>
</html>