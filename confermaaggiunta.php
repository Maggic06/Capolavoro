<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Aggiunta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
    $idp = $_POST["idp"];
    $canzoni = $_POST["canzoni"];
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "musica");

   
    $playlist_query = mysqli_query($conn, "select nome from playlist where Idp = $idp");
    $playlist = mysqli_fetch_array($playlist_query);
    
    echo "<h1>Canzoni aggiunte alla playlist '".$playlist["nome"]."':</h1>";
    echo "<ul>";

    foreach($canzoni as $idc) {
    
        $check = mysqli_query($conn, "select * from aggiunta where idp = $idp and idc = $idc");
        if(mysqli_num_rows($check) == 0) {
            mysqli_query($conn, "insert into aggiunta (idp, idc) values ($idp, $idc)");
            
          
            $canzone_query = mysqli_query($conn, "select nome from canzone where IdC = $idc");
            $canzone = mysqli_fetch_array($canzone_query);
            echo "<li>".$canzone["nome"]." - Aggiunta con successo</li>";
        } else {
            $canzone_query = mysqli_query($conn, "select nome from canzone where IdC = $idc");
            $canzone = mysqli_fetch_array($canzone_query);
            echo "<li>".$canzone["nome"]." - Già presente nella playlist</li>";
        }
    }

    echo "</ul>";
    echo "<a href='vediplay.php'>Visualizza le tue playlist</a><br>";
    echo "<a href='sceglicanzoni.php'>Aggiungi altre canzoni</a>";

    mysqli_close($conn);
    ?>
    
    <footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="index.html">Home</a>
            <a href="#">Chi Siamo</a>
            <a href="#">Contatti</a>
        </div>
        <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Il Tuo Sito Musicale. Tutti i diritti riservati.</p>
    </div>
</footer>
</body>
</html>