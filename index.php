<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Clientes</title>
</head>
<body>
    <?php
    include("conexao.php");
    $grupo = selectAllClientes();
    ?>
    <nav class="navbar navbar-expand navbar-light bg-light">
       <div class="nav navbar-nav">
           <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="cadastro.php">Cadastrar</a>
       </div>
    </nav>

    <h2 class="text-center">Lista de Clientes</h1>
    
    <table class="table table-ligh">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Telefone:</th>
                <th>Endereço:</th>   
                <th>Nascimento:</th>   
                <th></th>
                <th></th>           
            </tr>
        </thead>
        <tbody>
        <?php foreach ($grupo as $clientes) { ?>
            <tr>
                <td scope="row"><?= $clientes["nome"]?></td>
                <td><?= $clientes["email"]?></td>
                <td><?= $clientes["telefone"]?></td>
                <td><?= $clientes["sexo"]?></td>
                <td><?= $clientes["nascimento"]?></td>
                <td>
                <form name="alterar" action="alterar.php" method="POST">
                    <input type="hidden" name="id" value="<?= $clientes["id"]?>">
                    <input class="btn btn-primary" type="submit" value="Editar" name="editar">
                </form>
                </td>
                <td>
                <form name="excluir" action="conexao.php" method="POST">
                    <input type="hidden" name="id" value="<?= $clientes["id"]?>">
                    <input type="hidden" name="acao" value="excluir">
                    <input class="btn btn-primary" type="submit" value="Excluir" name="excluir">
                </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <?php 
    
    ?>


</body>
</html>