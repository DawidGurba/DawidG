<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przyloty</title>
    <style>
     *{
        font-family: 'Saira Condensed', sans-serif;

    margin:0;
    padding:0;
}
.sekcja{
    background: rgb(214,172,23);
background: linear-gradient(90deg, rgba(214,172,23,1) 0%, rgba(255,254,1,1) 50%, rgba(255,156,0,1) 99%);
}
.podstr{
    display:flex;
    align-items:center;
    justify-content:space-between;
   
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
.divv{
    display:flex;
    align-items:center;
    justify-content:center; 
    text-transform:uppercase;
    font-size:50px;
    margin-top:80px;
    margin-bottom:80px;
}
.p{
    font-family:  sans-serif;

    display:flex;
    align-items:center;
    justify-content:center; 
    font-size:25px;
    margin-top:80px;
    margin-bottom:80px;
    
}



.powrot{
    display:flex;
    align-items:end;
    justify-content:flex-end;
    background-color:rgb(255, 129, 0);
    margin-top:100px;
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
        <button class="log"><a href="podstrona1.php">Odloty</a></button>
        <button class="log"><a href="podstrona3.html">Galeria</a></button>
        <button class="log"><a href="podstrona4.html">Kontakt</a></button>
        </div>


    <div class="divv">
        <h1>Historia lotniska</h1>
        </div>
        <p class="p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate reiciendis aliquam dolorem mollitia. Mollitia repudiandae nisi reprehenderit impedit. Eveniet cupiditate fugiat alias fuga asperiores veritatis nam placeat sunt quas. Nobis!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea cupiditate minima quaerat vitae tenetur voluptas possimus veritatis, omnis nisi non et libero aperiam, beatae aliquam fuga adipisci quis quidem rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dolores qui est, ea expedita nobis ratione excepturi ab rem autem dolorem iste totam unde, omnis delectus eos dicta. Temporibus, quia?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ratione harum impedit error dolor ullam eligendi, natus enim excepturi perferendis suscipit molestias aliquam. Adipisci doloribus, ratione ea optio cupiditate praesentium!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis reiciendis molestias in totam nisi voluptates nihil incidunt velit tenetur, dicta repellendus quia hic, officiis, cumque fuga est voluptas debitis. Vitae.
        </p>
        <p class="p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate reiciendis aliquam dolorem mollitia. Mollitia repudiandae nisi reprehenderit impedit. Eveniet cupiditate fugiat alias fuga asperiores veritatis nam placeat sunt quas. Nobis!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea cupiditate minima quaerat vitae tenetur voluptas possimus veritatis, omnis nisi non et libero aperiam, beatae aliquam fuga adipisci quis quidem rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dolores qui est, ea expedita nobis ratione excepturi ab rem autem dolorem iste totam unde, omnis delectus eos dicta. Temporibus, quia?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ratione harum impedit error dolor ullam eligendi, natus enim excepturi perferendis suscipit molestias aliquam. Adipisci doloribus, ratione ea optio cupiditate praesentium!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis reiciendis molestias in totam nisi voluptates nihil incidunt velit tenetur, dicta repellendus quia hic, officiis, cumque fuga est voluptas debitis. Vitae.
        </p>
        



 <div class="powrot">

     <button class="log2"><a href="zaloguj.php">Powrót</a></button>
     
     </div>
 <section class="footer">
     <p>®Oficjalna strona lotniska  Nowym Sączu</p>
 </section>
</head>
<body>
    
</body>
</html>