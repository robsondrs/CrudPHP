<?php
    require_once 'classes/Usuarios.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuário</title>
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

    ?>
    <center>
        <br>
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
                        <td><button name="voltar" value="" onclick="voltar()">Voltar</button></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        <script type="text/javascript">
            function voltar() {
                location.href="lista_usuarios.php";
            }
        </script>
    </center>
</body>
</html>