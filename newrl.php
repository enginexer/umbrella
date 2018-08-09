

<?php

    $dbhost = 'sql304.byethost.com';
    $dbname = 'b11_22536593_couple';
    $dbuser = 'b11_22536593';
    $dbpass = ' Umbrella@B';

    function generateUrshort($length = 8){
      $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
      $numChars = strlen($chars);
      $string = '';
         for ($i = 0; $i < $length; $i++) {
             $string .= substr($chars, rand(1, $numChars) - 1, 1);
             }

        return $string;
     }
        $a = $_POST['urlstart'];
          echo 'longurl: <p>', $a,'<p> shorturl: <p>';
        $b = 'http://roketrans.com/'.generateUrshort(8);
          echo $b;

    $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

           $sql = "INSERT INTO `longshort` (`longs`, `shorts`) VALUES ('".$a."','".$b."')";

           mysqli_query($link, $sql);


         echo '<p> share short url your friends <br> <a href="http://roketrans.com/"> back </a>';

      $today = date("Y-m-d H:i:s");  

      $sqldel = "DELETE FROM longshort WHERE `dates` < '".$today."' - INTERVAL 15 DAY";

      mysqli_query($link, $sqldel);


?>


