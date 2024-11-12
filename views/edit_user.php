<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
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
            color: white;
        }

        div{
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
            position: relative;
        }

        h2 {
            font-family: 'Dancing Script', cursive;
            font-size: 3em;
            color: white;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 1em;
            cursor: pointer;
        }

        button:hover {
            background-color: blue;
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        .error-message {
            background-color: red;
            color: white;
            padding: 15px;
            border-radius: 5px;
            font-weight: bold;
            animation: shake 0.3s ease-in-out;
            margin-bottom: 15px;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-10px);
            }

            50% {
                transform: translateX(10px);
            }

            75% {
                transform: translateX(-10px);
            }

            100% {
                transform: translateX(0);
            }
        }

        p,
        a {
            color: lightblue;
            font-size: 1em;
            font-weight: 300;
        }

        a:hover {
            text-decoration: underline;
        }
        input, select {
            
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }
    </style>

<body class="edit-body">
    <div class="edit-container">
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id'] ?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user['nome'] ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required><br>

            <label for="perfil">Perfil:</label><br>
            <select name="perfil" id="perfil">
                <option value="admim" <?= $user['perfil'] == 'admim' ? 'selected' : '' ?> >Admin </option>
                <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?> >Gestor</option>
                <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?> >Colaborador</option>
            </select><br><br>

            <button type="submit" class="btn">Salvar</button><br>
        </form><br>
        <a style="text-align: center;" href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>

</html>