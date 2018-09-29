<html>
    <link rel="stylesheet" href="styles.css">
    <body>
        <?php
            $name = $email = "";

            if($_SERVER["REQUEST_METHOD"] == "GET"){
                if($_GET["name"] == "Murilo" and $_GET["email"]=="muriloandradealmeida@gmail.com"){
                    echo "Welcome ", $_GET["name"], "<br>"; 
                    
                    echo "Your email address is: ", $_GET["email"];
                }
            }
        ?>
    </body>
</html>