
    <?php
        function activeLink($pageName) {
            $activeStauts = "active";
            $selfLink = "#";
            echo "<li ><a class=$activeStauts href=$selfLink>$pageName</a></li> ";
        }
        function pointingLink($pageName) {
            echo "<li ><a href=$pageName.php>$pageName</a></li> ";
        }
        function activeMenu($active) {
            //These are for displaying "" symbols int the argument of echo
            $menuClass = "menubar";
            $options = array("home", "info", "gallery", "links");
            echo "<div class=$menuClass> ";
            echo    "<nav> ";
            echo        "<ul> ";
            for($i = 0; $i <count($options); $i++) {
                if($active == $options[$i]) {activeLink($options[$i]);}
                else {pointingLink($options[$i]);}
            }
            echo        "</ul> ";
            echo    "</nav> ";
            echo "</div> ";
        }
    ?>
