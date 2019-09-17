<html>
    <head>
        <title>Задание 2</title>
    </head>
    <body>
        <form method="post">;
            <p>Рост: <input name="l" text="type"></p>
            <p>Вес: <input name="m" text="type"></p>
            <p>Возраст: <input name="t" text="type"></p>
            <p> Пол: <input name="g" type="radio" value="Мужчина">Мужчина <input name="g" type="radio" value="Женщина">Женщина</p>  
            <p><input type='submit' value="Отправить"></p>
        </form>
        <?php
        $midm = (3*l-450+t)*0.250+45.0;
        $midn = (3*l-450+t)*0.225+40.5;
        $rn = ((m-$midn)/m)*100+22;
        $rm = ((m-$midm)/m)*100+15;
        $kind = m/(l/100)**2;
        $pn = 8.9*$rn+11*(100-$rn);
        $pm = 8.9*$rm+11*(100-$rm);
        $y  = (35.75- log(m))/53.2;
        $S = (1000*m)**$y * pow(l, 0.3)/3118.2;
        echo $midm;
        echo $rm;
        echo $kind;
        echo $pm;
        echo $y;
        echo $S;
        ?>
    </body>
</html>