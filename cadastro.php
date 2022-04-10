<?php
    include_once "header.php";
    if(!empty($_POST))
    {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        if($idade >= 0 && $idade < 13)
        {
            $categoria = "Infantil";
        }
        else if($idade > 12 && $idade < 18)
        {
            $categoria = "Juvenil";
        }
        else if($idade > 17 && $idade < 51)
        {
            $categoria = "Adulto";
        }
        else if($idade > 50)
        {
            $categoria = "Sênior";
        }
        $_SESSION["competidores"][] = [$nome, $idade, $categoria];
    }
?>
<head>
    <title>
        Cadastro | Aula Form PHP
    </title>
</head>
    <form action="" method="POST">
    <h2>Formulário de Cadastro de Competidores</h2> 
    <input type="text" placeholder="Nome completo" name="nome" minlength="3" maxlength="40" required /><br /><br />
        <input type="number" placeholder="Idade" min="0" max="99" step="1" name="idade" required /><br /><br />
        <input type="submit" value="Cadastrar" />
    </form>
<?php
    include_once "footer.php";
?>