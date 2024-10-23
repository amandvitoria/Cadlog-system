<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">

    <style>
        body {

            background-image: url('https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg?semt=ais_hybrid');
            background-size: cover;

            text-align: center;
            margin-top: 150px;
            margin-left: 400px;
            margin-right: 400px;
        }

        div {
            border: 5px;
            
           color: white;
            border-radius: 5px;
            position: relative;

        }

        a{
            color: lightblue    ;
        }

        h1{
            font-size: xxx-large;
            font-family: 'Dancing Script', cursive;
    font-weight: 400; /* Estilo mais fino */
        }

        p, a{
            font-family: 'Roboto', sans-serif;
    font-weight: 300; /* Peso mais fino */
        }
    </style>
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>

<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil'] ?>!</h1>
        <p>Esta é a visão do perfil <? $_SESSION['perfil'] ?>.</p>

        <?php if ($_SESSION['perfil'] == 'admin') : ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>

        <?php elseif ($_SESSION['perfil'] == 'gestor') : ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>

        <?php else : ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>

</html>