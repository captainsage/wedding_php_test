<!doctype html>
<html>
    <head>
        <title>V&M AdminPage</title>
        <link href="_css/main.css" rel = "stylesheet" type="text/css"/>
    </head>
    <body id="admin">
        <header>
            DATA
        </header>
        <div class="bump"></div>
        <div id="login">
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pass"> 
            <input type="submit" onclick="logged_in()">    


           
        </div>
        <div id="guest_data">
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

                $sql = "SELECT*FROM guests;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "  |  ". $row["name"]. "  |  ". $row["email_address"]. "  |  " . $row["attendance"]. "  |  "."<br>". "<hr>". "<br>";
                }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
        </div>
        <script src="main.js"></script>
    </body>
</html>
