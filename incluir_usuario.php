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

        if(isset($_POST['salvar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario->insert($nome, $email, $senha);
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
                        <td><input type="text" name="nome" id="" size="50"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" id="" size="50"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" id="" size="50"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="salvar" value="Salvar"></td>
                        <td><input type="submit" name="voltar" value="Voltar" ></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
</body>
</html>