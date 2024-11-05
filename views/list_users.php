<?php
//Verifica se tem um perfil detectado se tiver inicia o html
session_start();

if (isset($_SESSION['perfil'])) :

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <style>
            body {
                background-image: url('https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg?semt=ais_hybrid');
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: 'Roboto', sans-serif;

                
            }

            h2 {
                font-family: 'Dancing Script', cursive;
                font-size: 3em;
                color: white;
                margin-bottom: 20px;
            }

            a{
                color: lightblue;
            }



         
 
            .container {
                background: rgb(255,255,255);
                background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
                padding: 40px;

                text-align: center;
            }
 
            
 
            .styled-table {
                width: 100%;
                border-collapse: collapse;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                text-align: left;
            }
 
            .styled-table thead tr {
                background-color: #a0a8ff;
                color: black;
            }
 
            .styled-table th,
            .styled-table td {
                padding: 12px 15px;
                border-bottom: 1px solid #dddddd;
                text-align: left;
              
            }
            
            td{
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
 
            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin-top: 20px;
                background-color: #a0a8ff;
                color: black;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                
            }
 
            .btn:hover {
                background-color: #4a0072;
            }
 
          

        </style>
        

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    </head>

    <body class="<? $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') : ?>
                                    <a href="index.php?action=edit&id=<?=$user['id'] ?>">Editar</a>
                                <?php endif; ?>

                                <!-- insere botao de exclusao apenas para perfil admin -->
                                <?php if ($_SESSION['perfil'] == 'admin') : ?>
                                    <a href="">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>

    </html>
<?php else : ?>
    <p>Erro: Você não tem permissão para vizualizar essa página</p>
<?php endif; ?>