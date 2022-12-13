<?php
session_start();

if(!isset($_POST['login']) || (!isset($_POST['haslo']))){
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalogowano</title>
    <style>
    *{
    font-family:  'Saira Condensed';
    margin:0;
    padding:0;
}

.divek{
    display:flex;
    align-items:center;
    justify-content:center;
    height:100px;
    background: rgb(214,172,23);
background: linear-gradient(90deg, rgba(214,172,23,1) 0%, rgba(255,254,1,1) 50%, rgba(255,156,0,1) 99%);
    padding:10px;
    text-transform: uppercase;
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
   
    margin: 0 auto;
    
  }
  .www{
    padding-top: 50px;
    padding-bottom: 80px;
    background: rgb(214,172,23);
background: linear-gradient(90deg, rgba(214,172,23,1) 0%, rgba(255,254,1,1) 50%, rgba(255,156,0,1) 99%);
  }
  
  .www h2{
    font-size: 3.75rem;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    padding-bottom: 30px;
    font-family: 'Saira Condensed', sans-serif;
    color: rgb(255, 129, 0);
  }
  .www-items{
    display: flex;
    justify-content: space-between;
    font-family: 'Saira Condensed', sans-serif;
  }
  
  .www-item{
    flex-basis: 30%;
  }
  .www .www-item{
    width: 100%;
    height: auto;
    object-fit: cover;
    text-align: center;
    flex-wrap: wrap;
    margin-right: 50px;
    margin-left: 50px;
  }
  .www .www-item h4{
    font-size: 2.25rem;
    font-weight: bold;
    line-height: 1.2;
    padding-top: 30px;
    padding-bottom: 30px;
    text-transform: uppercase;
    color:  rgb(255, 129, 0);
  }
  
  .www .www-item p{
    font-size: 1.25rem;
    font-weight: 300px;
  }
  
  .www img{
    max-width: 500px;
    max-height: 300px;
  }
  .p{
    display:flex;
    align-items:center;
    justify-content:center;
    font-size: 1.2125rem;
    font-weight: 300px;
    font-family: 'Saira Condensed', sans-serif;
    font-weight: bold;
    margin-bottom: 50px;
    padding: 10px;
  }
  .pp{
    display:flex;
    align-items:center;
    justify-content:center;
    font-size: 2rem;
    font-weight: 300px;
    font-family: 'Saira Condensed', sans-serif;
    font-weight: bold;
    margin-bottom: 50px;
    padding: 10px;
    color:  rgb(255, 129, 0);
  }
.info{
    
    height: 300px;
    background-color:rgb(255, 129, 0);
    color:black;
}
.info h2{
    margin-top:30px;
display:flex;
align-items:center;
justify-content:center;
color:black;
text-transform: uppercase;
font-size: 2.5rem;
}
.info p{
    font-family: Tahoma;
    display:flex;
align-items:center;
justify-content:center;
    margin-left:20px;
    text-transform: uppercase;
    color:black;
    
    font-size: 1.25rem;
    font-weight: 300px;
}

.zdj{
    max-height: 400px;
    max-width:400px
    
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

}
.log2 a{
    color:black;
    text-decoration:none;
}
.log2:hover{
    background: rgb(214,172,23);
background: linear-gradient(90deg, rgba(214,172,23,1) 0%, rgba(255,254,1,1) 50%, rgba(255,156,0,1) 99%);
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
<button class="log"><a href="podstrona1.php">Odloty</a></button>
<button class="log"><a href="podstrona2.php">Historia</a></button>
<button class="log"><a href="podstrona3.html">Galeria</a></button>
<button class="log"><a href="podstrona4.html">Kontakt</a></button>
</div>
</section>
    <div class="divek">
<h1>Witam na stronie lotniska, jesteś zalogowany</h1>
</div>

<section class="container">
<div class="www">
    <h2>Lotnisko Sącz Airport</h2>
<p class="p">Lotnisko Sącz Airport to jedno z najnowocześniejszych lotnisk, znajdujące się w Nowym Sączu</p>
<p class="pp">O to co nasze lotnisko ma do zaoferowania</p>
    <div class="www-items">
            <div class="www-item">
            <img src="images/lotnisko4.jpg" alt="" class="zdj">
<h4>Nowoczesna technologia</h4>
<p>Nasze lotnisko posiada najnowocześniejsze samoloty pasażerskie oraz transportowe. Nasze samoloty są sprawdzanę zawsze przed i po wylocie z lotniska.<p>


            </div>
            <div class="www-item">
            <img src="images/lotnisko3.jpg" alt="" class="zdj">
            <h4>Loty</h4>
<p>W usłudze posiadamy loty no najbardziej porządanych miejsc na świecie. Również mamy w ofercie podróże do tropikalnych krajów. Wydajemy wiele zniżek na podróże.<p>
            </div>

            <div class="www-item">
            <img src="images/lotnisko12.jpg" alt="" class="zdj">
            <h4>Wykwalifikowany personel</h4>
<p>Nasz personel jest porfesjonalnie przeszkolony. Posiadamy wykwalifikowaną kadrę. Posiadamy jednych z najlepszych pilotów w Europie.<p>
            </div>
            
    </div>
</div>
</section>

<div class="info">
    <br>
<h2>Drodzy pasażerowie</h2>
</br>
<br>
<p>W związku ze zwiększonym ruchem, prosimy pasażerów podróżujących zarówno z bagażem podręcznym, jak i rejestrowanym o wcześniejsze przybycie do Nowy Sącz Airport.</p>
</br>
<p>Prosimy o przyjazd na lotnisko co najmniej 2h przed planowaną godziną odlotu.</p>
</div>


<section class="container">
<div class="www">
<p class="pp">Oto jakie również usługi oferujemy</p>
    <div class="www-items">
            <div class="www-item">
            <img src="images/lotnisko9.jpg" alt="" class="zdj">
<h4>Możliwość tankowania paliwa AVGAS 100 LL</h4>
<p>Istnieje możliwość tankowania paliwa AVGAS 100 LL w naszym Aeroklubie. Tankowanie jest dostępne w godzinach pracy lotniska. Metoda płatności gotówka lub karta płatnicza. Ceny paliwa sprawdź w cenniku.<p>


            </div>
            <div class="www-item">
            <img src="images/lotnisko6.jpg" alt="" class="zdj">
            <h4>Hangarowanie</h4>
<p>Jeżeli chcesz aby twój samolot bezpiecznie mógł przeczekać na odlot jeden, dwa lub więcej dni mamy w ofercie możlwość hangarowania jak również kotwiczenie samolotu na płycie lotniska.<p>
            </div>

            <div class="www-item">
            <img src="images/lotnisko11.jpg" alt="" class="zdj">
            <h4>Powierzchnie reklamowe</h4>
<p>Sącz Airports posiada wolne powierzchnie reklamowe , na wielko powierzchniowych drzwiach hangarów lotniczych. Dodatkowo dysponujemy aktualnymi zgodami GDDKiA na umieszczenie reklam na terenie lotniska, wzdłuż bardzo ruchliwej drogi krajowej nr. 75<p>
            </div>
            
    </div>
</div>
</section>
<div class="powrot">
<button class="log2"><a href="index.php">Powrót</a></button>

</div>

<section class="footer">
        <p>®Oficjalna strona lotniska  Nowym Sączu</p>
    </section>
</body>
</html>
<?php




require_once('connect.php');
$polaczenie = @new mysqli($host, $user, $password, $database);

if($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie->connect_errno;
}
else
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    
    if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s' ",
    mysqli_real_escape_string($polaczenie,$login))))
    {
$ile_user = $rezultat->num_rows;
if($ile_user>0)
{
            $wiersz = $rezultat->fetch_assoc();

            if(password_verify($haslo, $wiersz['pass'])){

            

            $_SESSION['zalogowany'] = true;


        $_SESSION['id'] = $wiersz['id'];
        $_SESSION['user'] = $wiersz['user'];
        $_SESSION['email'] = $wiersz['email'];

        unset($_SESSION['blad']);
        $rezultat->close();
        header('Location: loc.php');
    }
else
    {
        $_SESSION['blad'] = '<span style="color:red">Błędny login lub hasło</span>';
        header('Location: index.php');
        exit();
        }

}
else
{
$_SESSION['blad'] = '<span style="color:red">Błędny login lub hasło</span>';
header('Location: index.php');
exit();
}
    }

    $polaczenie->close();
}


?>