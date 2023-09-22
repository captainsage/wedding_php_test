<!doctype html>
<html>
    <head>
        <title>V&M</title>
        <link href="_css/main.css" rel = "stylesheet" type="text/css"/>
    </head>

    
    <body id="gallery">
        <?php
            include "top.html";
            include "menu.php";
            activeMenu("gallery");
        ?>
        <!--<div class="menubar">
            <nav>
                <ul>
                    <li ><a href="home.php">Home</a></li>
                    <li ><a href="info.php" href="#">Info</a></li>
                    <li ><a class="active" href="#">Gallery</a></li> 
                    <li ><a href="links.php">Links</a></li>
                </ul>
            </nav>
        </div>-->
        <div class="bump"></div>
        <div class="container">
            <div class="twocol">
                <img class="imggallery" src="_images/sample_img (4).jpg" alt = "valami nim a jao" onclick="display_img(this)">        
                <img class="imggallery" src="_images/sample_img (15).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (3).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (5).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (7).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <!--<img class="imggallery" src="_images/sample_img (9).jpg" alt = "valami nim a jao" onclick="display_img(this)">-->
                <img class="imggallery" src="_images/sample_img (11).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (13).jpeg" alt = "valami nim a jao" onclick="display_img(this)">
            </div>
          
            <div class="twocol">
                <img class="imggallery" src="_images/sample_img (2).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (1).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (6).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (8).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (10).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (12).jpg" alt = "valami nim a jao" onclick="display_img(this)">
                <img class="imggallery" src="_images/sample_img (14).jpg" alt = "valami nim a jao" onclick="display_img(this)">
            </div>
            <div id="myModal" class="modal">
                <span class="close" onclick="hide_img()">&times;</span>
                <img class="modal-content" id="img01" alt="valami nim jao">
                <div class="bump2"></div>
            </div>
        </div>
        <?php
            include "bot.html";
        ?>
        <script src="main.js"></script>
    </body>
</html>
