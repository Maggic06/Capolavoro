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
    $i1=$_POST["i1"];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"select * from album where nome like '$i1';");
    $riga=mysqli_fetch_array($query);
    echo("<table border='8px'>");
    echo("<tr>");
    echo("<td>"."Copertina"."</td>");
    echo("<td>"."Nome"."</td>");
    echo("<td>"."Data di Pubblicazione"."</td>");
    echo("</tr>");
    while($riga){
        echo("<tr>");
       echo("<td>"."<img width='100px' height='100px' src='".$riga['copertina']."'>"."</td>");
       echo("<td>".$riga["nome"]."</td>");
       echo("<td>".$riga["Data"]."</td>");
       echo("</tr>");
        $riga=mysqli_fetch_array($query);
    }
    echo("</table>");
    $query=mysqli_query($conn,"select artista.* from artista inner join creato on artista.idar=creato.idar inner join album on creato.idal=album.idal where album.nome like '$i1';");
    $riga=mysqli_fetch_array($query);
    echo("<table border='8px'>");
    echo("<tr>");
    echo("<td>"."Nome D'Arte"."</td>");
    echo("<td>"."Nome"."</td>");
    echo("<td>"."Cognome"."</td>");
    echo("<td>"."Biografia"."</td>");
    echo("<td>"."Nazionalita"."</td>");
    echo("</tr>");
    while($riga){
        echo("<tr>");
         echo("<td>".$riga["nomedarte"]."</td>");
       echo("<td>".$riga["Nome"]."</td>");
        echo("<td>".$riga["Cognome"]."</td>");
       echo("<td>".$riga["bio"]."</td>");
        echo("<td>".$riga["nazionalita"]."</td>");
        echo("</tr>");
      $riga=mysqli_fetch_array($query);
    }
    echo("</table>");
    
    $query=mysqli_query($conn,"select canzone.* from canzone inner join album on album.idal=canzone.idal where album.nome like '$i1';");
    $riga=mysqli_fetch_array($query);

    echo("<table border='8px'>");
    echo("<tr>");
    echo("<td>"."N"."</td>");
    echo("<td>"."Nome"."</td>");
    echo("<td>"."Durata"."</td>");
    echo("<td>"."Esplicita"."</td>");
    echo("<td>"."Visualizzazioni"."</td>");
    echo("<td>"."Lingua"."</td>");
    echo("</tr>");
    while($riga){
        echo("<tr>");
         echo("<td>".$riga["IdC"]."</td>");
       echo("<td>".$riga["nome"]."</td>");
        echo("<td>".$riga["durata"]."</td>");
       echo("<td>".$riga["esplicita"]."</td>");
        echo("<td>".$riga["visualizzazioni"]."</td>");
        echo("<td>".$riga["lingua"]."</td>");
        echo("</tr>");
      $riga=mysqli_fetch_array($query);
    }
    echo("</table");
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