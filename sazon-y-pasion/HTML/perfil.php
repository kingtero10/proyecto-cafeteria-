<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div class="barra">
<div class="flecha1">
    <a href="../HTML/Pagina Principal.php"><img src="../IMG/atras.png" alt=""></a>
    </div>
    <img class="logo" src="../IMG/sazon.png" alt="">
    </div>
    <div class="header">
    <img class="avatar" src="../IMG/perfil.png" alt="">
    <h1 class="user-name">Andres</h1>
</div>
<ul class="social">
    <li>
        <i class="icon facebook"></i>
        <a href="facebook"></a>
    </li>
    <li>
        <i class="icon instagram"></i>
        <a href="instagram"></a>
    </li>
    <li>
        <i class="icon twitter"></i>
        <a href="twitter"></a>
    </li>
</ul>

<hr class="linea">
<br>

<div class="about">
    <h3>Editar</h3>
    <input type="text" placeholder="Descripcion">
</div>

    <hr class="linea">
<br>

<div class="contenedor">

    <li>
        <i class="icon corazon"></i>
        <a href="facebook">Mis favoritos</a>
        <i class="icon flecha"></i>
    </li>
    <hr>
    <li>
        <i class="icon historial"></i>
        <a href="facebook">Historial</a>
        <i class="icon flecha"></i>
    </li>
    <hr>
    <li>
        <i class="icon cartera"></i>
        <a href="facebook">Cartera</a> 
        <i class="icon flecha"></i>
    </li>
    <hr>
</div>

</body>
</html>
<style>
    body{
        background-color:#212F3D;
    }
    .header h1{
        color:white;
        font-size:30px;
    }

.header{
    text-align: center;
    height: 300px;
    padding: 12px;
    background-image: url("../IMG/porta.jpg");
    background-size: cover;
}
.logo {
    width: 4rem; 
    margin-left: 85%;  
}

.barra{
    display: flex;
    
}
.flecha1 img{
    width: 3rem;
    padding: 13px;
    
}
.avatar{
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
.user-name{
    font-size: 18px;
    margin-top: 14px;
    color: white;
}
.social{
    list-style: none;
    text-align: center;
    padding: 0;
}
.social li{
    display: inline-block;
    margin: 5px;
}
a{
    text-decoration: none;
    color: black;
}
a :hover{
   color: aqua; 
}
.icon{
    width: 26px;
    height: 26px;
    display: inline-block;
    background-size: cover;
}
.facebook{
    background-image: url("../IMG/facebook1.png");
}
.instagram{
    background-image: url("../IMG/instagram1.png");
}
.twitter{
    background-image: url("../IMG/gorjeo.png");
}
.about{
    padding: 10px;
}
.about h3{
    color: #E67E22;
    font-size: 26px;
}
.about p{
    color: black;
    font-size: 14px;
}
.about input {
    color: black;
    border: 2px solid black;
    border-radius: 10px ;
    background: transparent;
    width: 100%;
    height: 100PX;
   }

   .input:active {
    box-shadow: 2px 2px 15px red inset;
   }



.linea{
    padding: 10px;
    background-color:#17202A;
    border: 5px solid #17202A ;
}
.corazon{
background-image: url("../IMG/favourite.png");
}
.historial{
background-image: url("../IMG/3d-alarm.png");
}
.cartera{
background-image: url("../IMG/wallet.png");
}
.contenedor{
    list-style: none;
    font-size: 20px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: 600;
}
.contenedor a{
    margin-left: 2vh;
    color: white;
}
.contenedor i{
    margin-left: 5vh;
}
.flecha{
    background-image: url("../IMG/right-arrow.png");
    float: right;
    margin-right: 5vh;
}

</style>