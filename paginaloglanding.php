<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
    $i1=$_POST["user"];
    $i2=$_POST["password"];
    $i3=$_POST["nome"];
    $i4=$_POST["cog"];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"insert into utente(nome,cognome,username,password)values('$i3','$i4','$i1','$i2');");
    echo "Registrazione avvenuta con successo"."<br>";
    $query=mysqli_query($conn,"select * from utente where username like '$i1' and password like '$i2';");
    $riga=mysqli_fetch_array($query);
    while($riga){
        echo($riga["username"]." ".$riga["password"]."<br>");
        $riga=mysqli_fetch_array($query);
    }
    ?>
    <form action="index.html">
        <input type="Submit" value="OK">
    </form>
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