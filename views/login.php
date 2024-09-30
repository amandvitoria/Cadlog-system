<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            text-align: center;
            background: rgb(68, 81, 196);
            background: rgb(219, 244, 239);
            background: radial-gradient(circle, rgba(219, 244, 239, 1) 0%, rgba(70, 106, 182, 1) 100%);
            margin-top: 150px;
            margin-left: 400px;
            margin-right: 400px;
            

        }

        div {
            border: 5px;
            width: 60%;
            background-color: white;
            border-radius: 5px;
            left: 100px;
            position: relative;

        }

        input{
            padding: 7px;
            border-radius: 5px;
            border: 1px solid black;
        }

        input:focus{
            border-color: blue;
            outline: none;
            box-shadow: 0px 2px 3px blue;
        }

        button {
            padding: 10px;
            background-color: lightblue;
            border: 1px;
            border-radius: 10px;
            color: black;
        }

        button:hover {
            background-color: blue;
            color: white;
            transition: color 0.3s;
        }

        label{
            font-size: large;
        }

        a{
            color: black;
        }
        a:hover{
            color: blue;
        }
        
    </style>
</head>

<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main>
        
        <div><br>
            <form method="post" action="index.php?action=login">
                <h2>Tela de Login</h2>
                <label for="nome">Nome:</label><br>
                <input type="email" name="email" placeholder="Email" required><br><br>
                <label for="nome">Senha:</label><br>
                <input type="password" name="senha" placeholder="Senha" required><br><br>
                <button type="submit">Login</button><br><br>
            </form>
            <!-- Define o destino do link e leva à opção de cadastro -->
            <a href="index.php?action=register">Cadastrar-se</a>
        </div>
    </main>

</body>

</html>