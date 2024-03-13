<!DOCTYPE html>
<html>
<head>
    <title>Identificação de números redondos</title>
</head>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero">Informe um número:</label>
    <input type="number" name="numero" id="numero">
    <button type = "submit">OK</button>
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo foi preenchido
    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
 
        // Verifica se é um número inteiro
        if (is_numeric($numero)) {
            // Verifica se o número é redondo
            if ($numero % 10 == 0) {
                echo "<p>O número $numero é redondo.</p>";
            } else {
                echo "<p>O número $numero não é redondo.</p>";
            }
        } ;
    }
}
?>
 
</body>
</html>