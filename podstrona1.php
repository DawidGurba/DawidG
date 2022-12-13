

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty</title>
    <style>
           *{
    font-family:  sans-serif;
    margin:0;
    padding:0;
}
body{
    background-color:rgb(255, 129, 0);
}
.sekcja{
    background-color:rgb(255, 129, 0);
}
.podstr{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-left:10px;
    margin-right:10px;
    background-color:rgb(255, 129, 0);
    height:100px;
}
.log{
    height: 50px;
        border: 3px solid yellow;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-bottom: 5px;
        transition: 0.5s;
        width: 350px;
        border-radius:12px;
        cursor: pointer;

}
.log a{
    color:black;
    text-decoration:none;
}
.log:hover{
    background-color: yellow;
        color: yellow;
}
.container{
    background-color:rgb(255, 129, 0);
    height:100%;
    width:100%;
}
.odloty{
    display:flex;
    align-items:center;
    justify-content:center;
    margin-top: 50px;
    margin-bottom:50px;
    text-transform:uppercase;
    font-size:50px;
}
.odl{
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:50px;
    margin-bottom:217px;
}
.powrot{
    display:flex;
    align-items:end;
    justify-content:flex-end;
    background-color:rgb(255, 129, 0);
    
}
.log2{
    height: 100px;
        border: 3px solid yellow;
        color:yellow;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-bottom: 5px;
        transition: 0.5s;
        width: 600px;
        text-decoration: none;
        display:block;
        border-radius:12px;
        cursor: pointer;
margin-top:100px;
}
.log2 a{
    color:black;
    text-decoration:none;
}
.log2:hover{
    background-color: yellow;
        color: black;
}
        .footer{
    display:flex;
    align-items:flex-end;
    justify-content:center;
    height:30px;
    width: 100%;
    background-color:black;
    color:white;
    margin-bottom:10px;
}
    </style>
</head>
<body>
  
<section class="sekcja">
<div class="podstr">
<button class="log"><a href="zaloguj.php">Strona główna</a></button>
<button class="log"><a href="podstrona2.php">Historia</a></button>
<button class="log"><a href="podstrona3.html">Galeria</a></button>
<button class="log"><a href="podstrona4.html">Kontakt</a></button>
</div>
<div class="odloty">
<h1>Odloty</h1>
</div>

<div class="odl">
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'projekt';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT id, cel, data, dotarcie FROM odloty";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      echo " " . $row["id"]. " | " . $row["cel"]. " | " . $row["data"]. " | " . $row["dotarcie"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>
</div>



    <div class="powrot">

        <button class="log2"><a href="zaloguj.php">Powrót</a></button>
        
        </div>
        
    <section class="footer">
        <p>®Oficjalna strona lotniska  Nowym Sączu</p>
    </section>
</body>
</html>