<?php

	if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
				$name = strip_tags(trim($_POST['name']));
				$phone = strip_tags(trim($_POST['phone']));
        $to = 'foxica32@gmail.com'; //Почта получателя
        $subject = 'Заявка на обратный звонок'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                    		<p>Заявка на обратный звонок</p>
                        <p>Имя: '.$name.'</p>
                        <p>Телефон: '.$phone.'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "С сайта mebelvkzn.ru\r\n"; //Наименование и почта отправителя
   
   //подключим phpMailer и пропишем настройки
 require_once './assets/lib/PHPMailer/PHPMailerAutoload.php';

 		$mail = new PHPMailer;
			 //настройки для майлера
		$mail->isMail();
		$mail->setFrom('mebelvkzn.ru');
		$mail->addAddress($to, 'to Elvira Aitova');   

		$mail->isHTML(true);
		$mail->Body = $message;

			//что делать если отправлено/не отправлено сообщение
		if(!($mail->send())) {		   
		    echo 'Ошибка: ' . $mail->ErrorInfo;
		} else {
		    echo 'Ваше сообщение отправлено';
		}    

}
?>

