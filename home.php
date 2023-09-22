<!doctype html>
<html>
    <head>
        <title>V&M</title>
        <link href="_css/main.css" rel="stylesheet" type="text/css"/>
    </head>

    <body id="home">
        <?php
            include "top.html";
            include "menu.php";
            activeMenu("home");
        ?>
        <!--<div class="menubar">
            <nav>
                <ul>
                    <li ><a class="active" href="#">Home</a></li>
                    <li ><a href="info.php" href="#">Info</a></li>
                    <li ><a href="gallery.php">Gallery</a></li>
                    <li ><a href="links.php">Links</a></li>
                </ul>
            </nav>
        </div> --> 

        <div class="bump"></div>
        <div class="container">
            <div class="intro_contain">
                <p class="intro" > <em>"Gyertek az esküvőre <br> bemutatkozás <br> szeretettel <br> meghívunk <br> bla <br> bla <br> bla...
                    "</em>
                </p>
                <div class="bump"></div>
                <?php
                    //phpinfo();
                    $servername = "localhost";
                    $username = "root";
                    //$password = "";
                    $dbname = "guest_login";

                    // Create a connection
                    $conn =  new mysqli($servername, $username, "", $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                ?>
            </div>
            <!--<div id="reg_link"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfgGq1PP9znoLMe3DROPGDrLZrzLjWjqCiH6C1D7SrSTDOb8w/viewform?usp=sf_link">Letsgo</a></div>-->
            <div>
                <form method="post" action="home.php">
                    <!--<?php //$_POST["name"] = " "; ?>-->
                    Ide írdd be a neved  <input type="text" name="name"> <br>
                    <div class="bump"></div>
                    Ide az email címed: <input type="text" name="email"> <br>
                    <div class="bump"></div>
                    Tudsz jönni?:   <br>
                        <input type="radio" id="a1" name="attendance" value="igen">
                        <label for="a1">Tudok jönni</label><br>
                        <input type="radio" id="a2" name="attendance" value="nem">
                        <label for="a2">Sajnos nem érek rá</label><br>  
                    <div class="bump"></div>
                    <input type="submit">
                </form>
                <br>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if($_POST["name"] === "admin") {
                            header("Location: admin.php");
                            exit();
                        }
                        $sql_select = "SELECT*FROM guests
                                       WHERE name='$_POST[name]'";
                        $sql_select_result = $conn->query($sql_select);
                        $sql_insert = "INSERT INTO guests(name, email_address, attendance)
                                       VALUES ('$_POST[name]', '$_POST[email]', '$_POST[attendance]');";

                        if ($sql_select_result->num_rows == 0 && $conn->query($sql_insert) === TRUE) {
                            //echo "New record created successfully";
                            } else {
                            //echo "Error: " . $sql_insert . "<br>" . $conn->error;
                        }
                    }
                    $conn->close();
                ?>
            </div>
        </div>
        <?php
            include "bot.html";
        ?>
        <!--<footer>2023</footer>-->

    </body>
</html>
