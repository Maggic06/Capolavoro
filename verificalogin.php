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
    $i2=$_POST["pax"];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"select * from utente");
    $riga=mysqli_fetch_array($query);
    while($riga){
        if($i1==$riga["username"] and $i2==$riga["password"]){
        $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"select playlist.* from playlist inner join creata on creata.idp=playlist.idp inner join utente on utente.idu=creata.idu where utente.username like '$i1' and utente.password like '$i2';");
    $riga=mysqli_fetch_array($query);
    echo("<table border='8px'>");
    echo("<tr>");
    echo("<td>"."Copertina"."</td>");
    echo("<td>"."Nome"."</td>");
    echo("</tr>");
    while($riga){
        echo("<tr>");
       echo("<td>"."<img width='100px' height='100px' src='".$riga['copertina']."'>"."</td>");
       echo("<td>".$riga["nome"]."</td>");
       echo("</tr>");
        $riga=mysqli_fetch_array($query);
    }
    echo("<a href='index.html'><button>Torna all'index</button></a>");
        exit();
        }
        else{echo("User o password sbagliati");}
        $riga=mysqli_fetch_array($query);
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