<?php ?>
<!DOCTYPE html>
<html>
    <head><!--header stuff--></head>
    <body>
      <?php results = "Start";
        $connect = mysql_connect("lus-cdbr-iron-east-05.cleardb.net","ba34f3f8d9d386", "6206b3d7");
                if (!$connect) {
                    die(mysql_error());
                    $results = "flop";
                }
                mysql_select_db("heroku_f4436271c441c5d");
                $results = "Kyle";
        ?>
        <h1> <?php echo $results; ?> </h1>
    </body>
</html>
