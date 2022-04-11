<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi satuan suhu 21101166</title>
</head>
<body>

    <h1>  Konversi  Suhu</h1>
    <form action="" method="POST">
        Konversi: <br>
        <input type="radio" name="unit1" value="C" >Celcius ke fahrenhait
        <input type="radio" name="unit2" value="F" >Fahrenhait ke celcius<br>
        <input type="number" name="pp">

        <button type="submit" name="submit">Konversi</button>
</form>
</body>
</html> 

<?php 

if (isset($_POST['unit1'])) {

    $suhu = $_POST["pp"];

    $hsl = ($suhu * 9 / 5) + 32;


    echo '<p> Hasil Konversi: <p>';
    echo '<p>°F = (°C x 9/5) + 32 <p>';
    echo '<p>°F = (' . $suhu . ' °C x 9/5) + 32<p>';
    echo '°F = ' . $hsl . '°';
}

if (isset($_POST['unit2'])) {

    $suhu = $_POST["pp"];

    $hsl = ($suhu - 32) * 5 / 9;


    echo '<p>Hasil Konversi:<p>';
    echo '<p>°C = (°F - 32) x 5/9 <p>';
    echo '<p>°C = (' . $suhu . ' °F - 32) x 5/9<p>';
    echo '°C = ' . $hsl . '°';
}
    