<h1>Criar Usuário</h1>

<a class="btn btn-primary" href="?page=home">Voltar</a>

<?=get('message'); ?>

<form action="/pages/forms/create_user.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome">
    </div><br>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
    </div><br>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="E-mail">
    </div><br>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Senha">
    </div><br>


    <button type="submit" class="btn btn-primary">Cadastrar</button><br>

    <hr>
</form>