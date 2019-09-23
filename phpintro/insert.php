<html>
    <body>
        <?php
             include 'dbconnection.php';
             $conn=openfun();
             echo "connected succesfully";
             closecon($conn);
        ?>
    </body>
</html>