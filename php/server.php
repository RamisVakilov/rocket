<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once 'phpMailer/PHPMailer.php';
    require_once 'phpMailer/Exception.php';
    require_once 'phpMailer/SMTP.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['tel'];

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->isHTML(true);   


    //Получатели
    

    $mail->setFrom('vrz@example.com', 'Отдых из России');//от кого письмо
    $mail->addAddress('ramis.vakilov@gmail.com','Вакилов Рамис');     //Add a recipient
    
        

    //Content
                                   
    $mail->Subject = 'Запись на приём';
    $mail->Body    = '<h2>Пришла заявка</h2>'.
                        'Клиент '. $name .' с такими данными: <br>'
                        .$email.' и <br>'.
                        $message.' решил записаться к нам на приём!';
                         
    $mail->AltBody = 'Пришла заявка ';

    
    try{
        $mail->send();
        echo 'the mail is send';
        
    }catch(Exception $e){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    
 ?>   