<?php  


if (isset($_POST["acao"])){

    if ($_POST["acao"] == "cadastrar"){
        cadastrarCliente();
    }
    if ($_POST["acao"] == "excluir"){
       excluirCliente();
    }
    if ($_POST["acao"] == "alterar"){
        alterarCliente();
    }

}

function abrirBanco(){

    $conexao = new mysqli("localhost","root","root","db_desafio_grts");

    return $conexao;
};

function cadastrarCliente(){

    #informações do cliente pegas do form pelo metodo post
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $nascimento = $_POST["nascimento"];
    #informações do endereço pegas do form pelo metodo post
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $complemento = $_POST["complemento"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["uf"];
    $pais = $_POST["pais"];

    #echo "$cep,$rua,$complemento,$numero,$bairro,$cidade,$estado,$pais";


    #echo "$nome,$email,$telefone,$sexo,$nascimento";
    
    $banco = abrirBanco();
    $sql = "INSERT INTO clientes(nome,email,telefone,sexo,nascimento)
    VALUES
    ('$nome','$email','$telefone','$sexo','$nascimento')";
    $sql2 = "INSERT INTO endereco(logradouro,complemento,numero,bairro,cidade,estado,pais,cep)
    VALUES 
    ('$rua','$complemento','$numero','$bairro','$cidade','$estado','$pais','$cep')";
  
    $banco->query($sql);
    $banco->query($sql2);
    $banco->close;
    voltarIndex();

}

function selectAllClientes(){
$banco = abrirBanco();

$sql = "SELECT * FROM clientes ORDER BY nome";
$resultado = $banco->query($sql);

while ($row = mysqli_fetch_array($resultado)){
    $grupo[] = $row;
}
    return $grupo;
}

function selectCliente($id){

    $banco = abrirBanco();
    $sql = "SELECT * FROM clientes WHERE id =".$id;
    $resultado = $banco->query($sql);
    $banco->close();
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}


function excluirCliente(){

    $id = $_POST["id"];
    
    $banco = abrirBanco();
    $sql = "DELETE FROM clientes WHERE id='$id'";
    $banco->query($sql);
}


function alterarCliente(){

    
    $banco = abrirBanco();
    $sql = "UPDATE clientes SET nome='{$_POST["nome"]}',email='{$_POST["email"]}',telefone='{$_POST["telefone"]}', sexo='{$_POST["sexo"]}',nascimento='{$_POST["nascimento"]}', WHERE id='$id'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function voltarIndex() {
    header("Location:index.php");
}

?>