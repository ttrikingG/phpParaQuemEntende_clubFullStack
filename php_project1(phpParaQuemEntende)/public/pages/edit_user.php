<h1>Editar</h1>

<a class="btn btn-primary" href="?page=home">Voltar</a>

<?=get('message');?>

<hr>

<?php 
    $user = find('users', 'id', $_GET['id']);
?>

<form action="/pages/forms/update_user.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome" value="<?=$user->name?>">
    </div><br>

    <input type="hidden" name="id" value="<?=$user->id?>">

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="<?=$user->sobrenome?>" >
    </div><br>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?=$user->email?>">
    </div><br>

    <button type="submit" class="btn btn-primary">Atualizar</button><br>

    <hr>
</form>