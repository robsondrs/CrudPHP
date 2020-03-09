<?php
    require_once 'classes/Usuarios.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Usuário</title>
    <style>
        table, th, td {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $usuario = new Usuarios();


        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $dados = $usuario->findUnit($id);
        }

        if(isset($_POST['alterar'])){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario->update($id, $nome, $email, $senha);
            header('location: lista_usuarios.php');
        }

        if(isset($_POST['voltar'])){
            header('location: lista_usuarios.php');
        }
    ?>
    <center>
        <br>
        <form method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" size="50" value="<?php echo $dados->nome; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" size="50" value="<?php echo $dados->email; ?>"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" size="50" value="<?php echo $dados->nome; ?>"></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $dados->id; ?>">
                        <td><input type="submit" value="Alterar" name="alterar"></td>
                        <td><input type="submit" name="voltar" value="Voltar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
</body>
</html>