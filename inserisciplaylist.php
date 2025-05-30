<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Creata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $idu = $_POST["idu"];
    
    // Gestione upload immagine
    $target_dir = "immagini/";
    $file_extension = strtolower(pathinfo($_FILES["copertina"]["name"], PATHINFO_EXTENSION));
    $new_filename = $nome . "." . $file_extension;
    $target_file = $target_dir . $new_filename;
    
    if(move_uploaded_file($_FILES["copertina"]["tmp_name"], $target_file)) {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "musica");
        
        // Inserimento playlist
        $query = mysqli_query($conn, "INSERT INTO playlist(nome, copertina) VALUES ('$nome', '$target_file')");
        $idp = mysqli_insert_id($conn);
        
        // Collegamento utente-playlist
        $query = mysqli_query($conn, "INSERT INTO creata(idu, idp) VALUES ($idu, $idp)");
        
        echo "Playlist creata con successo!<br>";
        echo "<a href='index.html'><button>Torna all'index</button></a>";
    } else {
        echo "Errore nel caricamento dell'immagine.<br>";
        echo "<a href='index.html'><button>Torna all'index</button></a>";
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