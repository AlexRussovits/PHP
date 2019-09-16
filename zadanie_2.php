
<form method="post">
    <p>Имя: <input name = "name" type="text"></p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        if (empty($name)) {
            echo 'Введите имя';
        }
    }
    ?>
    
    <p>Фамилия: <input name = "surname" type="text"></p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $surname = $_POST['surname'];
        if (empty($surname)) {
            echo 'Введите фамилию';
        }
    }
    ?>
    <p>E-mail: <input name="email" type="text"></p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        if (empty($email)) {
            echo 'Введите э-майл';
        }
    }
    ?>
    <p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $message = $_POST['message'];
        if (empty($message)) {
            echo 'Введите сообщение';
        }
    }
    ?>   
    <p><input type='submit' value="Отправить"></p>
    
</form>
    
    