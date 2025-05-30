<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Canzoni alla Playlist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
    $i1=$_POST["user"];
    $i2=$_POST["password"];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"select * from utente");
    $riga=mysqli_fetch_array($query);
    $logged = false;

    while($riga){
        if($i1==$riga["username"] && $i2==$riga["password"]) {
            $logged = true;
            $idu = $riga["Idu"];
            break;
        }
        $riga=mysqli_fetch_array($query);
    }

    if($logged) {
      
        $playlist_query = mysqli_query($conn, "select playlist.* from playlist inner join creata on playlist.Idp = creata.idp where creata.idu = $idu");

   
        $canzoni_query = mysqli_query($conn, "select canzone.*, album.nome as album_nome from canzone inner join album on canzone.idal = album.idal");

        echo "<h1>Aggiungi Canzoni alla Playlist</h1>";
        echo "<form action='confermaaggiunta.php' method='POST'>";
        
    
        echo "<h2>Seleziona la Playlist:</h2>";
        echo "<select name='idp' required>";
        while($playlist = mysqli_fetch_array($playlist_query)) {
            echo "<option value='".$playlist["Idp"]."'>".$playlist["nome"]."</option>";
        }
        echo "</select><br><br>";

     
        echo "<h2>Seleziona le Canzoni:</h2>";
        echo "<div class='canzoni-container'>";
        while($canzone = mysqli_fetch_array($canzoni_query)) {
            echo "<div class='canzone-item'>";
            echo "<input type='checkbox' name='canzoni[]' value='".$canzone["IdC"]."'>";
            echo "<label>".$canzone["nome"]." (".$canzone["album_nome"].")";
            echo " - ".$canzone["durata"]." min</label><br>";
            echo "</div>";
        }
        echo "</div>";

        echo "<input type='submit' value='Aggiungi Canzoni'>";
        echo "</form>";
    } else {
        echo "<p>Username o password non validi</p>";
        echo "<a href='sceglicanzoni.php'>Torna al login</a>";
    }

    mysqli_close($conn);
    ?>
    <style>
    .canzoni-container {
        max-height: 400px;
        overflow-y: auto;
        padding: 20px;
        border: 1px solid #333;
        border-radius: 5px;
        margin: 20px 0;
    }
    .canzone-item {
        margin: 10px 0;
        padding: 5px;
        border-bottom: 1px solid #444;
    }
    select, input[type="submit"] {
        margin: 10px 0;
        padding: 8px;
        border-radius: 4px;
    }
    </style>
</body>
</html>