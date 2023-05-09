<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="switch.css">
    <title>Condicional Switch</title>
</head>
<body>
    <?php
    $state= $_GET["Estado"];
    switch($state) {
    Case "Paraná":
    Case "Santa Catarina":
    Case "Rio Grande do Sul":
        echo "Você é natural da região Sul do Brasil!";
        break;

    Case "São Paulo":
    Case "Minas Gerais":
    Case "Rio de Janeiro":
    Case "Espírito Santo":
        echo "Você é natural da região Sudeste do Brasil";
        break;

    Case "Goias":
    Case "Mato Grosso":
    Case "Mato Grosso do Sul":
    Case "Distrito Federal":
        echo "Você é natural da região Centro-Oeste do Brasil";
        break;

    Case "Amazonas":
    Case "Pará":
    Case "Acre":
    Case "Roraima":
    Case "Rondônia":
    Case "Amapá":
    Case "Tocantins":
        echo "Você é natural da região Norte do Brasil";
        break;

    Case "Maranhão":
    Case "Piauí":
    Case "Ceará":
    Case "Rio Grande do Norte":
    Case "Paraíba":
    Case "Pernambuco":
    Case "Alagoas":
    Case "Sergipe":
    Case "Bahia":
        echo "Você é natural da região Nordeste do Brasil";
        break;
    }
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>