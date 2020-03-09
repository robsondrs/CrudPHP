<?php
    require_once "classes/Usuarios.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
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
    ?>
    <center>
        <h1>Lista de Usuários</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th colspan="3">Comandos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($usuario->findAll() as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->senha; ?></td>
                        <form method="post" name="comandos" id="comandos">
                            <td><a href="consultar_usuario.php?id=<?php echo $value->id; ?>">Consultar</a></td>
                            <td><a href="alterar_usuario.php?id=<?php echo $value->id; ?>">Alterar</a></td>
                            <td><a href="excluir_usuario.php?id=<?php echo $value->id; ?>">Excluir</a></td>
                        </form>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        <br>
        <button name="incluir" value="Incluir" onclick="incluir()">Incluir</button>
        <button name="voltar" value="" onclick="voltar()">Voltar</button>
    </center>
    <script type="text/javascript">
        function incluir() {
            location.href="incluir_usuario.php";
        }

        function voltar() {
            location.href="index.php";
        }
    </script>
</body>
</html>