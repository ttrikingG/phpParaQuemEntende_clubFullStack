<h1>Contato</h1>

<a class="btn btn-primary" href="?page=home">Voltar</a>

<?=get('message'); ?>

<hr>

<form action="/pages/forms/contato.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome">
    </div><br>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="E-mail">
    </div><br>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Assunto">
    </div><br>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
    </div><br>

    <button type="submit" class="btn btn-primary">Enviar</button><br>

    <hr>
</form>