<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'alexbulgakov90@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта helpforcomputers.ru'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <div class="subscribe">
                            <p>Имя:'.htmlspecialchars($_POST['name']).'</p>
                            <p>Телефон:'.htmlspecialchars($_POST['phone']).'</p> 
                             
                        </div>                    
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Send by <info@help4apple.ru>\r\n"; //Наименование и почта отправителя
        $rc = mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
        echo 'rc: ',var_export($rc, true);
}
?>