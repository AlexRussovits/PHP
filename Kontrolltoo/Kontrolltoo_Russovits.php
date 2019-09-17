<html>
    <head>
        <title>Задание 1</title>
    </head>
    <body>
        <h1>Тест на знание таблицы умножения</h1>
        <hr>
        <?php
        $min = 1;
        $max = 10;
        $earv = rand($min, $max);
        $tarv = rand($min,$max);
        $earv2 = rand($min,$max);
        $tarv2 = rand($min,$max);
        $earv3 = rand($min,$max);
        $tarv3 = rand($min,$max);
        $earv4 = rand($min,$max);
        $tarv4 = rand($min,$max);
        $earv5 = rand($min,$max);
        $tarv5 = rand($min,$max);
        ?>
        <form method="post">
            <?php $result1 = $earv * $tarv ?>
            <?php echo $earv. " * ". $tarv, " = " ?> <input name="otvet1" type="text">;<br>
            <input type="hidden" id="custId" name="custId" value="result1">
            <?php $result2 = $earv2 * $tarv2 ?>            
            <?php echo $earv2. " * ". $tarv2, " = " ?> <input name="otvet2" type="text">;<br>
            <input type="hidden" id="custId" name="custId" value="result2">
            <?php $result3 = $earv3 * $tarv3 ?>
            <?php echo $earv3. " * ". $tarv3, " = " ?> <input name="otvet3" type="text">; <br>
            <input type="hidden" id="custId" name="custId" value="result3">
            <?php $result4 = $earv4 * $tarv4 ?>
            <?php echo $earv4. " * ". $tarv4, " = " ?> <input name="otvet4" type="text">; <br>
            <input type="hidden" id="custId" name="custId" value="result4">
            <?php $result5 = $earv5 * $tarv5 ?>
            <?php echo $earv5. " * ". $tarv5, " = " ?> <input name="otvet5" type="text">; <br>
            <input type="hidden" id="custId" name="custId" value="result5">
            <p><input type='submit' value="Отправить"></p>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $result1 = $_POST['result1'];
           $result2 = $_POST['result2'];
           $result3 = $_POST['result3'];
           $result4 = $_POST['result4'];
           $result5 = $_POST['result5'];
           $otvet1 = $_POST['otvet1'];
           $otvet2 = $_POST['otvet2'];
           $otvet3 = $_POST['otvet3'];
           $otvet4 = $_POST['otvet4'];
           $otvet5 = $_POST['otvet5'];
           $result = 0;
           if ($otvet1 == $result1 or $otvet1 != $result1) {
               $result++;
               echo 'Правильно';
               echo 'Неправильно';
           }
           elseif ($otvet2 == $result2 or $otvet2 != $result2) {
               $result++;
               echo 'Правильно';
               echo 'Неправильно';
           }
           elseif ($otvet3 == $result3 or $otvet3 != $result3) {
               $result++;
               echo 'Правильно';
               echo 'Неправильно';
           }
           elseif ($otvet4 == $result4 or $otvet4 != $result4) {
               $result++;
               echo 'Правильно';
               echo 'Неправильно';
           }
           elseif ($otvet5 == $result5 or $otvet5 != $result5) {
               $result++;
               echo 'Правильно';
               echo 'Неправильно';
           }
        }
        ?>     
        <?php
        echo "Количество правильных ответов: ", $result;
        if ($result == 5) {
            echo 'Молодец';
        }
        elseif ($result == 4 or $result == 3) {
            echo 'Надо ещё подучить';
        }
        elseif ($result == 2 or $result == 1 or $result == 0) {
            echo 'Нужно выучить';
        }            
        ?>
    </body>    
</html>
