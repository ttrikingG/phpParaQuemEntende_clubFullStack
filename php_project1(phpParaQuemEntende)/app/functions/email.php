<?php

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain'; //ssl;
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';//aqui é pra configurar
    $email->SMTPAuth = true;
    $email->Port = 2525; //aqui é pra configurar
    $email->Username = 'd7953fbd21a391'; //aqui é pra configurar
    $email->Password = '6f9f2323c0451b'; //aqui é pra configurar
    $email->isHTML(true);
    $email->setFrom('tom_tricking.on@hotmail.com'); //aqui é pra configurar
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita HTML';
    $email->MsgHTML($data['mensagem']);
    
    return $email->send();
}

?>