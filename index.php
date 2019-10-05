<?php $connect = mysql_connect("lus-cdbr-iron-east-05.cleardb.net","ba34f3f8d9d386", "6206b3d7");
                if (!$connect) {
                    die(mysql_error());
                }
                mysql_select_db("heroku_f4436271c441c5d");
                $results = mysql_query("SELECT * FROM testhtml");
?>
<!DOCTYPE html>
<html>
    <head><!--header stuff--></head>
    <body>
        <table>
            <?php while($row = mysql_fetch_array($results)): ?>
                <tr>
                   <td><?php echo $row['Name']; ?></td>
                   <td><?php echo $row['Score']; ?></td>
                   <td><?php echo $row['Entry_dt']; ?></td>
               </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>
