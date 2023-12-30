<h1>Pagina inicial</h1>

<a class="btn btn-primary" href="?page=create_user">Cadastrar</a>

<a class="btn btn-primary" href="?page=contato">Mensagem</a>


<?= get('message');?>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <th>id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th></th>
        <th></th>
    </thead>

    <tbody>
        <?php 
            $users = all('users');
            foreach ($users as $user):
        ?>

        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->name;?></td>
            <td><?=$user->email;?></td>
            <td>
                <a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-success">Editar</a>
            </td>
            

            <td>
                <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>

        <?php endforeach;?>
    </tbody>
</table>