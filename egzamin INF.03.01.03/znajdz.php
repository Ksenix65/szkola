<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Kwiaty</title>
</head>
<body>
    <div class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona glowna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li>
                <a href="znajdz.php">Znajdz kwiaciarnie</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </div>
    <div class="prawy">
    <h2>Znajdz kwiaciarnie</h2>
            <form action="znajdz.php" method="post">
                <label>Podaj nazwe miejscowosci
                    <input type="text" name="miasto">
                </label>
                <button type="submit" name="wyslij">SPRAWDZ</button>
            </form>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
            if (isset($_POST['wyslij'])) {
                $miasto = $_POST['miasto'];
                $sql = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($res)) {
                    echo "<h3>$row[0], $row[1]</h3>";
                }
            }
            mysqli_close($conn)
            ?>
    </div>
    <div class="stopka">
        <p>Strone opracowal: Dominik Gawel</p>
    </div>
</body>
</html>