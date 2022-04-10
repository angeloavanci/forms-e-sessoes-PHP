<?php
    include_once "header.php";
?>
<head>
    <title>
        Lista de Competidores | Aula Form PHP
    </title>
</head>
<?php
if(empty($_SESSION))
{
    echo "
    <h2>
        Não existem competidores cadastrados!
    </h2>";
}
else
{
    echo "<h2>Lista de Competidores</h2><hr />";
    $i = 0;
    $tamanho = sizeof($_SESSION["competidores"]);

    foreach($_SESSION["competidores"] as $v)
    {
        $nome = $v[0];
        $idade = $v[1];
        $categoria = $v[2];
        echo "
        <p>Nome: " . $nome . "</p>
        <p>Idade: " . $idade . "</p>
        <p>Categoria: " . $categoria . "</p>";
        $i++;

        if($i < $tamanho)
        {
            echo "<hr />";
        }
    }
}

include_once "footer.php";
?>