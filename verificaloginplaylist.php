<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Playlist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
    $i1=$_POST["user"];
    $i2=$_POST["pax"];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"select * from utente");
    $riga=mysqli_fetch_array($query);
    $autenticato = false;
    $idu="";
    while($riga){
        if($i1==$riga["username"] && $i2==$riga["password"]){
            $autenticato = true;
            $idu = $riga["Idu"];
            break;
        }
        $riga=mysqli_fetch_array($query);
    }
    
    if($autenticato) {
        echo "<h2>Inserisci una nuova playlist</h2>";
        echo "<form action='inserisciplaylist.php' method='POST' enctype='multipart/form-data'>";
        echo "Nome playlist: <input type='text' name='nome'><br>";
        echo "Copertina: <input type='file' name='copertina' accept='image/*'><br>";
        echo "<input type='hidden' name='idu' value='$idu'>";
        echo "<input type='submit' value='Crea Playlist'>";
        echo "</form>";
    } else {
        echo "Username o password non validi";
        echo "<br><a href='index.html'><button>Torna all'index</button></a>";
    }
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