<html>
    <link rel="stylesheet" href="styles.css">
    <body>
		<?php
            $name = $email = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($_POST["name"] == "Murilo" and $_POST["email"]=="muriloandradealmeida@gmail.com"){
                    echo "Welcome ", $_POST["name"], "<br>"; 
                    
                    echo "Your email address is: ", $_POST["email"];
                }
            }
        ?>
	</body>
</html>