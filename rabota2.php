<html>
    <head>
        <title>Harjutused</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <body>
        <form method="post">
            <h1>Программа-калькулятор</h1>
            <p>Введите первое число: <input name="first" type="text"></p>
            <p>Введите второе число: <input name="second" type="text"></p>
            <p>Выберите операцию:
            <select name="act">
                <option value="y">Умножение</option>
                <option value="d">Деление</option>
                <option value="s">Сложение</option>
                <option value="v">Вычитание</option>
            </select>
            <p><input type='submit' value="Отправить"></p>
            </p>
        </form>
        <hr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first = $_POST['first'];
            $second = $_POST['second'];
            $act = $_POST['act'];
            if ($act == "y"){
               $result = $first * $second;
               echo "Результат: ",$first,"*",$second," = ",$result;
            }
            elseif ($act == "d") {
                if ($second == 0){
                    echo "Делить на ноль нельзя","<br>";
                }
                $result = $first / $second;
                echo "Результат: ", $first, "/", $second," = ",$result;
                
            }
            elseif ($act == "s") {
                $result = $first + $second;
                echo "Результат: ", $first,"+",$second," = ",$result;
            }
            elseif ($act == "v") {
                $result = $first - $second;
                echo "Результат: ", $first, "-", $second," = ",$result ;
            }
            
                    
       }
        ?>
        <hr>
        <form method = "post">
            <p>
                Введите фамилию
                <input type="text"name="sn">
            </p>
            <p> 1 вопрос: Какого типа переменная $a=5 ?
                <select name="q1">
                    <option value="Integer">Integer</option>
                    <option value="Double">Double</option>
                    <option value="String">String</option>
                    <option value="Float">Float</option>
                </select>
            </p>
            <p> 2 вопрос: Чему будет равен результат 18%11 ?
                <select name="q2">
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="1">1</option>
                </select>
            </p>
            <p> 3 вопрос : Что такое PHP ?
                <select name="q3">
                    <option value="Язык программирования">Язык программирования</option>
                    <option value="Компания телефона">Компания телефона</option>
                    <option value="Мод">Мод в Minecraft</option>
                </select>
            </p>
            <p> 4 вопрос : Оператор условия PHP?
                <select name="q4">
                    <option value="if">if</option>
                    <option value="switch">switch</option>
                    <option value="while">while</option>
                </select>
            </p>
            <p> 5 вопрос: Синтаксис оператора FOR?
                <select name="q5">
                    <option value="Синтаксис1">for i=1 to 15 do</option>
                    <option value="Синтаксис2">for($i=0;$i<$n;$i++)</option>
                </select>
            </p>
            <p>
                <input name="submit" type="submit" value="submit">
            </p>
        </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sn = $_POST ['sn'];
        $q1 = $_POST ['q1'];
        $q2 = $_POST ['q2'];
        $q3 = $_POST ['q3'];
        $q4 = $_POST ['q4'];
        $q5 = $_POST ['q5'];
        $result = 0;
        if($q1 == 'Integer') {
            $result++;
        }
        if($q2 == '7'){
            $result++;
        }
        if ($q3 == 'Язык программирования') {
            $result++;
        }
        if ($q4 == 'if') {
            $result++;
        }
        if ($q5 == 'Синтаксис2') {
            $result++;
        }
    }
    
    ?>
        <p>Студент: <?php echo $sn; ?></p>
        <table style="width:100%">
            <thead>
                <tr>
                    <th>Вопрос</th>
                    <th>Ваш ответ</th>
                    <th>Правильный ответ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Какого типа переменная $a=5 ?</td>
                    <td><?php echo $q1; ?></td>
                    <td>Integer</td>
                </tr>
                <tr>
                    <td>Чему будет равен результат 18%11 ?</td>
                    <td><?php echo $q2; ?></td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Что такое PHP ?</td>
                    <td><?php echo $q3; ?></td>
                    <td>Язык программирования</td>
                </tr>
                <tr>
                    <td>Оператор условия PHP?</td>
                    <td><?php echo $q4; ?></td>
                    <td>if</td>
                </tr>
                <tr>
                    <td>Синтаксис оператора FOR?</td>
                    <td><?php echo $q5; ?></td>
                    <td>for($i=0;$i<$n;$i++)</td>
                </tr>
                
            </tbody>
        </table>
        <?php
        echo "Количество правильных ответов : ", $result;
        ?>
        
        <form method="post">
            <table>
                <tr>
                    <td colspan="3">Выберите правильные цвета флага</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td bgcolor="blue" style="width: 100px;"></td>
                    <td>
                        <select name="firstColor">
                            <option value="Белый">Белый</option>
                            <option value="Синий">Синий</option>
                            <option value="Чёрный">Чёрный</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td bgcolor="black" id="td_color"></td>
                    <td>
                        <select name="secondColor">
                            <option value="Синий">Синий</option>
                            <option value="Белый">Белый</option>
                            <option value="Чёрный">Чёрный</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td bgcolor="white" id="td_color"></td>
                    <td>
                        <select name="thirdColor">
                            <option value="Чёрный">Чёрный</option>
                            <option value="Белый">Белый</option>
                            <option value="Синий">Синий</option>
                        </select>
                    </td>
          
                </tr>
            </table>
            <h1>Это флаг страны:</h1>
            Эстония <input type="radio" name="country" value="Эстония">
            Россия <input type="radio" name="country" value="Россия">
            Германия <input type="radio" name="country" value="Германия">
            Литва <input type="radio" name="country" value="Литва">
            <input type="submit" value="Проверить">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $firstColor = $_POST['firstColor'];
                $secondColor = $_POST['secondColor'];
                $thirdColor = $_POST['thirdColor'];
            }
        ?>
    </body>
    
</html>




