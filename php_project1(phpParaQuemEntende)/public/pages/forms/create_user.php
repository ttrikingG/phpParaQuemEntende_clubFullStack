<?php

require"../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

if( isEmpty()){
    flash('message','Os campos não foram preenchidos');

    return redirect("create_user");
}

$validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);

if($cadastrado){
    flash('message','Cadastrado com sucesso', 'success');

    return redirect('create_user');
}

flash('message', 'Erro ao cadastrar');

redirect('create_user');

?>