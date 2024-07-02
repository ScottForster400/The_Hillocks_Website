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
            include("inc/nav-inc.php")
        ?>
            <div class="info">
                <h1 id="Contact Us">
                    Contact Us
                </h1>
                <form action="https://formspree.io/f/mzzpbrrr" method="POST">
                    <div id=contact-frm>
                        <div class="form-items">
                            <label for="fullName">Name:*</label>
                            <input type="text" name="fullName" id="fullName"required>
                            <label for="phone">Phone Number:</label>
                            <input type="tel" name="phone" id="phone">
                            <label for="email">Email:*</label>
                            <input type="email" name="email" id="email"required>
                        </div>
                        <div class="form-items">
                            <label for="msgBox">Message:*</label>
                            <textarea name="msgBox" id="msgBox" cols="10" rows="10"  required></textarea>
                        </div>
                    </div>
                    <div class="centre vh">
                        <input type="submit" value="submit">
                    </div>
                </form>
        </div>
        <?php
            include("inc/foot-inc.php")
        ?>
    </div>
    
</body>
</html>