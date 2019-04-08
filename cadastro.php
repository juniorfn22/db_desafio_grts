<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="javascript.js"></script>
    <title>Clientes</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light ">
       <div class="nav navbar-nav">
           <a class="nav-item nav-link" href="index.php">Home </a>
           <a class="nav-item nav-link active" href="cadastro.php">Cadastrar<span class="sr-only">(current)</span></a>
       </div>
    </nav>

    <div class="container"> 
        <h1 class="text-center">Cadastro</h1>
        
    <form action="conexao.php" class="" method="POST">
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control col-sm-7" >
        </div>
        
        <div class="form-row">
            <div class="col-sm-3">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control" >
            </div>

            <div class="col-sm-3">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email"  class="form-control" >
            </div>
        </div>

        <div class="form-row mt-2">
            <div class="col-sm-3">
                <label for="nascimento">Nascimento</label>
                <input type="text" name="nascimento" id="nascimento"   class="form-control" >
            </div>

            <div class="col-sm-2">
                <label for="sexo">Sexo</label>
                <select class="form-control" name="sexo" id="sexo">
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
                </select>
            </div>
        </div>

        <h3 class="mt-4 border-bottom">Endereço</h3>

        <div class="form-group">
            <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);" class="form-control" style="width:100px;" >
        </div>

        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" name="rua" id="rua" class="form-control col-sm-7" readonly="">
        </div>

        <div class="form-group">
            <label for="complemento">Complemento:</label>
            <input type="text" name="complemento" id="complemento" class="form-control col-sm-5">
        </div>

        <div class="form-row">
            <div class="col-sm-3">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero">
            </div>
            <div class="col-sm-3">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="form-control" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-3">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control" readonly>
            </div>
            <div class="col-sm-3">
                <label for="uf">Estado</label>
                <input type="text" name="uf" id="uf" class="form-control" readonly>
            </div>
        </div>

        <div class="">
                <label for="pais">País</label>
                <select class="form-control col-sm-2" name="pais" id="pais">
                <option value="Brasil">Brasil</option>
                <option value="México">México</option>
                <option value="Estados Unidos">Estados unidos</option>
                </select>
        </div>

        <div class="mt-4">
            <input type="hidden" name="acao" value="cadastrar">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
    </form>
</body>
</html>