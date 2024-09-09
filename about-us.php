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
    <script src="javascript/scroll-fade.js" defer></script>
    <script src="javascript\jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            include("inc/nav-inc.php");
        ?>
        
        <div class="info">
            <h2>About Us</h2>
            <p>The Hillocks are an indie band originating from Warrington, formed in 2022.
                 The band includes Sam on vocals, Marcell on Drums, Harvey on bass, and Scott on guitar.<br>
                 "This band are completely lost in the sounds and feels they create" - New Sound Generation
                 </p>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="img-cont">
                        <img src="imgs/smev.webp" alt="smev" class="member-img">
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="member-inf">
                        <h2>Sam</h2>
                        <p>Sam is the lead singer of The Hillocks.<br>
                        Known for his compelling stage presence, he is the front man of the band putting on a great show for the audiences.
                         His love for music started at a young age, with influences from bands such as FUR, The High Flying birds and The Blossoms.</p>
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="member-inf">
                        <h2>Harvey</h2>
                        <p>Harvey is the bassist of The Hillocks.<br> 
                            His excellet playing provides a great groove to the band which can be seen in the many bass driven songs performed.
                            He began playing in his teens influenced by bands such as The Red Hot Chilli Peppers and The Goriilaz.</p>
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="img-cont">
                        <img src="imgs/harv.webp" alt="Harvey" class="member-img">
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="img-cont">
                        <img src="imgs/marc.webp" alt="Marcell" class="member-img">
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="member-inf">
                        <h2>Marcell</h2>
                        <p>Marcell is the drummer of The Hillocks.<br>
                            His energetic drumming provides the essential energy behing many of the Hilllocks.
                            He began playing in his early teens influenced by many artists such as Pink Floyd and The Foo Fighters.
                        </p>
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="member-inf">
                        <h2>Scott</h2>
                        <p>Scott is the guitarist of The Hillocks.<br>
                            Providing melodic and rythmic riffs and progressions behing many of the songs performed.
                            His playing began in his early teens, influenced by bands such as Radiohead and Interpol.</p>
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="img-cont">
                        <img src="imgs/scott.webp" alt="Scott" class="member-img">
                    </div>
                </div>
            </div>
            <!-- <h2>Our Music</h2>
            <div class="music">
                <iframe src="https://www.youtube.com/embed/B2t5LX6xRag?si=thW4cn9-n91qAAyS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div> -->
        </div>
        <?php
            include("inc/foot-inc.php")
        ?>
    </div>
</body>
</html>