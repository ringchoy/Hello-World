<!DOCTYPE html>
<html>
    <head><!--header stuff--></head>
    <body>
      <?php 
//        $connect = mysqli_connect("lus-cdbr-iron-east-05.cleardb.net:3306","ba34f3f8d9d386", "6206b3d7", "heroku_f4436271c441c5d");
//                if (!$connect) {
//                    $results = "flop";
//                    die(mysql_error());
//                }
//         $sql = 'SELECT name FROM testhtml';
//         $results = mysqli_query($connect, $sql);
            $results = "Kyle is doing great";      
 //        mysqli_close($conn);

//         if (mysqli_num_rows($result) > 0) {
//            while($row = mysqli_fetch_assoc($result)) {
//               echo "Name: " . $row["name"]. "<br>";
//            }
//         } else {
//            echo "0 results";
//         }
//                //$results = "Kyle";
        ?>
        
        <h1> Double Check Before PHP out</h1>
        <h1> <?php echo $results; ?> </h1>
        <h1> Triple Check after PHP </h1>
    </body>
</html>
