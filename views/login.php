<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Cadastro</title>

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

        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
            position: relative;
        }

        h1 {
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

        input[type="text"], input[type="password"], input[type="email"] {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        input[type="submit"] {
            background-color: lightblue;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: deepskyblue;
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
            0% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            50% { transform: translateX(10px); }
            75% { transform: translateX(-10px); }
            100% { transform: translateX(0); }
        }

        p, a {
            color: lightblue;
            font-size: 1em;
            font-weight: 300;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form-container">
        <h1>Login</h1>

        <!-- Exibe a mensagem de erro caso exista -->
        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <?= $error_message ?>
            </div>
        <?php endif; ?>

        <form action="index.php?action=login" method="post">
            <input type="text" name="email" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>

        <p>Não tem uma conta? <a href="index.php?action=register">Cadastre-se</a></p>
    </div>
</body>

</html>
