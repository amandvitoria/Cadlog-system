<!DOCTYPE html>
<html lang="pt-br">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Usuário</title>
<link rel="stylesheet" href="css/edit.css">
</head>
 
<body class="edit-body">
<div class="edit-container">
<h2>Editar Usuário</h2>
<form method="post" action="idex.php?action=edit&id=<?= $user['id']?>" class="edit-form">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required><br>
 
            <label for="email">Email:</label>
<input type="email" name="email" id="email" value="<?= $user['email']?>" required><br>
 
            <label for="perfil">Perfil:</label>
<select name="perfil" id="perfil">
<option value="admim"<?= $user['perfil'] == 'admim' ? 'selected' : ''?>>Admin</option>
<option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : ''?>>Gestor</option>
<option value="colaborador"<?= $user['perfil'] == 'colaborador' ? 'selected' : ''?> >Colaborador</option>
</select>
 
            <button type="submit" class="btn">Salvar</button>
</form>
<a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
</div>
</body>
 
</html>
