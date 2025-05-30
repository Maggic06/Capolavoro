<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Stile del menu a tendina */
select {
    width: 100%;
    max-width: 300px;
    padding: 12px;
    margin: 20px auto;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 10px;
    font-size: 16px;
    background-color: rgba(30, 30, 30, 0.8);
    color: white;
    cursor: pointer;
    display: block;
    transition: all 0.3s ease;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 12px auto;
    padding-right: 40px;
}

select:hover {
    background-color: rgba(40, 40, 40, 0.9);
    border-color: rgba(29,185,84,0.5);
    box-shadow: 0 0 15px rgba(29,185,84,0.2);
}

select:focus {
    outline: none;
    border-color: #1db954;
    box-shadow: 0 0 20px rgba(29,185,84,0.3);
}

select option {
    background-color: #1e1e1e;
    color: white;
    padding: 12px;
    font-size: 16px;
}

select option:hover {
    background-color: #1db954;
}


form {
    text-align: center;
    margin: 30px auto;
}

form input[type="submit"] {
    margin-top: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
    </style>
</head>
<body>
    <h1>Selezionare nome album da visualizzare</h1>
    <div>
    <form name="form" action="pagina2.php" method="POST">
    <?php
    echo("<div style='text-align: center;'>");
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"musica");
    $query=mysqli_query($conn,"select * from album;");
    $riga=mysqli_fetch_array($query);
    echo("<select name='i1'>"); 
    while($riga){ 
    echo("<option value='".$riga["nome"]."'>".$riga["nome"]."</option>"); 
    $riga=mysqli_fetch_array($query); 
    } 
echo("</select>"."<br>"); 
echo("<input type='submit' value='Cerca'>"); 
echo("</div>");
    ?>
    
    </form>
</div>
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