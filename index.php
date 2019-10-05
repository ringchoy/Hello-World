<?php 
        results = "SELECT * FROM testhtml"
?>
<!DOCTYPE html>
<html>
    <head><!--header stuff--></head>
    <body>
        <?php while($row = $results) : ?>
        $row
        <?php endwhile;?>
    </body>
</html>
