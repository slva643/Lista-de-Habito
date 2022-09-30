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

    <div class="center">
        <div class="box">
            <fieldset>
                <legend >
                    <h2>Novo Hábito</h2>
                </legend>


                <form id="formulario" action="inserthabito.php">
                    <p><label>Nome: <input type="text" id="nome" name="nome" autofocus /></label></p>
                    <p><input type="submit" value="Criar"></p>
                </form>
        </div>
    </div>

    <script typy="text/javascript">
        var validaForm = function() {
            var nomeHabito = document.getElementById("nome").value;
            if ("" == nomeHabito) {
                alert("É necessário informar o nome do Hábito");
                return false;
            }
        }
        document.getElementById("formulario").onsubmit = validaForm;
    </script>
    </fieldset>
</body>

</html>