<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki po Europie</title>
</head>
<body>
    <div class="baner">
        <h1>BIURO TURYSTYCZNE</h1>
    </div>
    <div class="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'biuro');
            $sql = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;";
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($res)) {
                echo "<li>$row[0]. dnia $row[1] jedziemy do $row[2], cena: $row[3]</li>";
            }
            ?>
        </ul>
    </div>
    <div class="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>lipiec</td>
            </tr>
                <td>Rzym</td>
                <td>wrzesień</td>
            <tr>

            </tr>
        </table>
    </div>
    <div class="srodkowy">
        <h2>Nasze zdjęcia</h2>
        <?php
            $sql = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($res)) {
                echo "<img src='$row[0]' alt='$row[1]' />";
            }
            mysqli_close($conn);
            ?>
    </div>
    <div class="prawy">
        <h2>Skontaktuj się</h2>
        <a href="turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 111222333</p>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: Dominik Gawel</p>
    </div>
</body>
</html>