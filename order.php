<DOCTYPE HTML>
<html lang = "pl">
<head>
    <meta charset = "utf-8"/>
    <title>Zamówienie</title>
</head>
<body>
    <?php
        $ilosc_paczkow = $_POST['paczkow'];
        $ilosc_grzebieni = $_POST['grzebieni'];
        $ilosc_pieniedze_paczkow = $ilosc_paczkow * 0.99;
        $ilosc_pieniedze_grzebieni = $ilosc_grzebieni * 1.29;
        $suma_pieniadze = $ilosc_pieniedze_paczkow + $ilosc_pieniedze_grzebieni;
echo<<<END
        <h2>Podsumowanie zamówienia</h2>
        <table border="2" cellpadding="15" cellspacing="0">
        <tr>
            <td>Pączek</td> <td>$ilosc_pieniedze_paczkow</td>
        </tr>
        <tr>
            <td>Grzebień</td> <td>$ilosc_pieniedze_grzebieni</td>
        </tr>
        <tr>
            <td>Suma</td> <td>$suma_pieniadze</td>
        </tr>
        </table>
        <br><br/>
        <a href = "index.php">Powrót do zamówienia</a>
END;
    ?>
</body>
</html>