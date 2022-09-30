<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Lista de hábitos</title>
</head>

<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend>
                    <h2>Lista de Hábitos</h2>
                </legend>
                <div class="center">
                    <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>

                    <?php
                    $servidor = "localhost";
                    $usuario = "root";
                    $senha = "";
                    $bancodedados = "listadehabito2";

                    $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

                    if ($conexao->connect_error) {
                        die("Falha na conexão:v" . $conexao->connect_error);
                    }

                    $sql = " SELECT id " . ",nome " . " FROM habito " . " where status = 'A' ";

                    $resultado = $conexao->query($sql);

                    if ($resultado->num_rows > 0) {

                    ?>


                        <br />
                        <table class="center">
                            <tbody>

                                <?php
                                while ($registro = $resultado->fetch_assoc()) {
                                ?>



                                    <tr>
                                        <td>
                                            <?php
                                            echo $registro["nome"];
                                            ?>
                                        </td>

                                        <td>
                                            <a href="vencerhabito.php?id=<?php echo $registro["id"]; ?>">Vencer</a>
                                        </td>
                                        <td>
                                            <a href="desistirhabito.php?id=<?php echo $registro["id"]; ?>">Desistir</a>
                                        </td>
                                    </tr>
                                <?php
                                } // Fim do looping
                                ?>

                            </tbody>
                        </table>

                        <p>Continue mudando sua vida!</p>
                        <p>Cadastre mais hábitos!</p>

                    <?php
                    } else {

                    ?>

                        <p>Você não possui hábitos cadrastrado!</p>
                        <p>Começe já a mudar sua vida!</p>

                    <?php
                    } //fim do if

                    $conexao->close();
                    ?>
                    <br>
                    <div class="baseboard">
                        <a href="novohabito.php">Cadastrar hábitos</a>
                    </div>
            </fieldset>


        </form>
    </div>
    </div>
</body>

</html>