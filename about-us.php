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
                 The band comprises Sam on vocals, Marcell on Drums, Harvey on bass, and Scott on guitar. 
                 Despite being a relatively new act, The Hillocks have quickly carved out a niche in the local music scene with their 
                 eclectic mix of melodic indie rock and introspective lyrics.</p>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="img-cont">
                        <img src="imgs/smev-edit-sq.png" alt="smev" class="member-img">
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="member-inf">
                        <h2>Sam</h2>
                        <p>Sam is the charismatic lead singer and guitarist of The Hillocks, an indie band from Warrington formed in 2022.
                         Known for his soulful voice and compelling stage presence, Sam is the creative force driving the band's
                          distinctive sound and heartfelt lyrics. His passion for music started at a young age, influenced by the rich 
                          musical heritage of the UK and iconic indie bands.</p>
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="member-inf">
                        <h2>Harvey</h2>
                        <p>Harvey is the talented bassist of The Hillocks, an indie band from Warrington formed in 2022. 
                            Known for his rhythmic precision and melodic bass lines, Harvey provides the essential groove that
                            underpins the band's distinctive sound. His musical journey began in his early teens, 
                            heavily influenced by both classic rock legends and modern indie innovators.</p>
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="img-cont">
                        <img src="imgs/harv-edit.png" alt="smev" class="member-img">
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="img-cont">
                        <img src="imgs/marcell-edit.jpg" alt="smev" class="member-img">
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="member-inf">
                        <h2>Marcell</h2>
                        <p>Marcell is the dynamic drummer of The Hillocks, an indie band from Warrington formed in 2022.
                             Renowned for his energetic and precise drumming style, Marcell is the heartbeat of the band's 
                             rhythm section, driving their songs with both power and finesse. His passion for percussion began in childhood, 
                             inspired by a mix of legendary rock drummers and contemporary rhythm innovators.</p>
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="slide-in from-left">
                    <div class="member-inf">
                        <h2>Scott</h2>
                        <p>Scott is the talented guitarist of The Hillocks, an indie band from Warrington formed in 2022. 
                            Known for his innovative playing and melodic sensibilities, Scott brings a unique sonic texture to the band's music. 
                            His journey with the guitar began in his early teens, heavily influenced by a blend of classic rock icons and modern indie guitarists.</p>
                    </div>
                </div>
                <div class="slide-in from-right">
                    <div class="img-cont">
                        <img src="imgs/scott-edit.jpg" alt="smev" class="member-img">
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