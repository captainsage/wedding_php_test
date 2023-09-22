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

        <div class="bump"></div>
        <div class="container">
            <div class="intro_contain">
                <p class="intro" > <em>"Gyertek az esküvőre <br> bemutatkozás <br> szeretettel <br> meghívunk <br> bla <br> bla <br> bla...
                    "</em>
                </p>
                <div class="bump"></div>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $dbname = "guest_login";

                    $conn =  new mysqli($servername, $username, "", $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                ?>
            </div>
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

    </body>
</html>
