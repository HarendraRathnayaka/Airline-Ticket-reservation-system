<html>
    <body>
        <?php
           $connection = new mysqli("localhost", "root", "", "register_work");
           if($connection->connect_error){
               die("connection failed".$connection->connect_error);
           }
        ?>
    </body>
</html>