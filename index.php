<DOCTYPE HTML>
<html lang = "pl">
<head>
    <meta charset = "utf-8"/>
    <title>Piekarnia</title>
</head>
<body>
    <h1>Zamówienie</h1>
    <form action="order.php" method = "post">
        Ilość pączków (0.99 PLN/szt):
        <input type="text" name="paczkow"/>
        <br><br/>
        Ilość grzebieni (1.29 PLN/szt):
        <input type="text" name="grzebieni"/>
        <br><br/>
        <input type="submit" value="wyślij zamówienie"/>
    </form>
    <?php?>
</body>
</html>