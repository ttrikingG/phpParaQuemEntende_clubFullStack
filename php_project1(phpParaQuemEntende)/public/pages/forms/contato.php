<?php

require"../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

if( isEmpty()){
    flash('message','Os campos não foram preenchidos');

    return redirect("contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

//dd($validate->name);

$data = [
    'quem' => $validate->email,
    'para' => 'tom_tricking.on@hotmail.com', //aqui é pra configurar
    'mensagem' => $validate->message,
    'assunto' => $validate->subject,
];

if(send($data)){
    flash('message', 'Email enviado com sucesso');

    return redirect("contato");
}

?>