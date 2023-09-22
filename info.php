<!doctype html>
<html>
    <head>
        <title>V&M</title>
        <link href="_css/main.css" rel = "stylesheet" type="text/css"/>
    </head>

    <body id="links">
        <?php
            include "top.html";
            include "menu.php";
            activeMenu("info");
        ?>

        <div class="container">
            <header>Helyszín</header>
            <div class="bump"></div>

            <div class="twocol left_list">
                <h1>Templom</h1>
                <p>Itt lesznek infók a helyről</p>
            </div>
            <div class="twocol" ><a href="https://www.google.com/maps/place/Szent+Gell%C3%A9rt-templom/@47.4686875,19.0227604,18z/data=!4m6!3m5!1s0x4741ddc401974ffd:0xace0b139a2722925!8m2!3d47.4685303!4d19.0230177!16s%2Fg%2F11b6r8qjdy?authuser=0&entry=ttu" class="nontext"><img src="_images/gellertemplom.PNG" class="map" alt="nim jao"></a></div> 

            <div class="bump"></div>
            <div class="bump"></div>
            <div class="bump"></div>


            <div class="twocol" ><a href="https://www.google.com/maps/place/Munk%C3%A1csy+Mih%C3%A1ly+M%C5%B1vel%C5%91d%C3%A9si+H%C3%A1z/@47.4284638,18.9125073,17z/data=!4m6!3m5!1s0x4741e057da187afb:0x4f14c387a68f8f49!8m2!3d47.4292179!4d18.9134785!16s%2Fg%2F1tdk3yzn?authuser=0&entry=ttu" class="nontext"><img src="_images/muvhaz.PNG" class="map" alt="nim jao"></a></div>            
            <div class="twocol right_list"> 
                <h1>Lagzi</h1>
                <p>Itt lesznek infók a helyről</p>
            </div>

            <div class="bump"></div>
            <header>Időpont: <em>2024.08.24</em></header>

            <div class="bump"></div>
        </div>
        <?php
            include "bot.html";
        ?>
        <script src="main.js"></script>
    </body>
</html>