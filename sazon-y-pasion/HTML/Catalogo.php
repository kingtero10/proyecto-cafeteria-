<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/Catalogo.css">
    <link rel="icon" href="/IMG/sazon.png">
    <title>Nuestra Tienda</title>
    
</head>
 <!--boxicons-->
 <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<header>
    <a href="#" class="logo"><i class='bx bxs-home'></i>Sazón y Pasión</a>

    <ul class="navlist"> 
        <li><a href="./Pagina Principal.php">Inicio</a></li> 
        <li><a href="./Pagina Principal.php#reseñas">Clientes</a></li> 
        <li><a href="./Pagina Principal.php#contacto">Contacto</a></li>  
    </ul>

    <div class="nav-icono">
        <a href="../HTML/perfil.php"><i class='bx bx-user-circle'></i></a>
        <a href="#"><i class='bx bxs-cart-alt'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>

<body>
    <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 1</p>
                    <span class="precio">$ 2.500</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion" id>COMBO 2 </p>
                    <span class="precio">$ 4.000</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 3
                    </p>
                    <span class="precio">$ 2.500</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 4</p>
                    <span class="precio">$ 2.500</span>
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 5</p>
                    <span class="precio">$ 2.500</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 6</p>
                    <span class="precio">$ 2.500</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 7</p>
                    <span class="precio">$ 2.500</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="../IMG/sazon.png" alt="">
                    </div>
                    <p class="descripcion">COMBO 8</p>
                    <span class="precio">$ 2.500</span>
                </div>
            </div> 
        </div>
        <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="/IMG/sazon.png" alt="" id="img">
                <h2 id="modelo">NIKE MODEL 1</h2>
                <p id="descripcion">Descripción Modelo 1</p>

                <span class="precio" id="precio">$ 130</span>

                <div class="fila">
                    <div class="size">
                        <label for="">CANTIDAD</label>
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <button>
  <div class="default-btn">
    <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle r="3" cy="12" cx="12"></circle></svg>
    <span>Enviar</span>
  </div>
  <div class="hover-btn">
    <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24"><circle r="1" cy="21" cx="9"></circle><circle r="1" cy="21" cx="20"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
  <span>car</span>
  </div>

</button>
                </div>
            </div>
        </div>
    </section>
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&display=swap');
:root{
    --main-color:#E67E22;
    --text-color:#F4D03F ;
    --other-color:#FDFEFE; 
    --second-color:#212F3D  ;
    --bg-color:#17202A;

    --big-font: 4.5rem;
    --h2-font: 2.6rem;
    --p-font: 1.1rem;
}

header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content:space-between ;
    padding: 30px 14%;
    transition: all 5s ease;
}
.logo{
    display:flex ;
    align-items:center ;
    color: var(--text-color);
    font-size: 33px;
    font-weight: 700;
    text-decoration: none;
}
.logo i{
vertical-align: middle;
margin-right: 8px;
color: var(--main-color);
}

.navlist{
    display: flex;
}
.navlist a{
    color: var(--other-color);
    font-size: var(--p-font);
    font-weight: 600;
    margin: 0 30px;
    text-decoration: none;
    transition: all .50s ease;
}
.navlist li{
    list-style: none;
}
.navlist a:hover{
    color: var(--main-color);
}
.navlist a:active{
    color: var(--main-color);
}
.nav-icono{
    display: flex;
    align-items: center;
    padding: 8px 15px;
    background: var(--main-color);
    border-radius: 3rem;
    box-shadow: #ff9f0d 0px 1px 25px;
    
}
.nav-icono i{
    background:var(--main-color);
    vertical-align: middle;
    font-size: 25px;
    color: var(--bg-color);
    margin-right: 8px;
    margin-left: 3px;
    transition: all .50s ease;
}
#menu-icon{
    font-size: 32px;
    color: var(--bg-color);
    z-index: 10001;
    cursor: pointer;
    display: none;
}
.nav-icono i:hover{
    transform: scale(1.1);
    color: var(--other-color);
}
.carro{
    background-image: url("/IMG/shopping-cart-add.png");
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans';
    
}
body{
    background:var(--bg-color) ;
    color: var(--text-color);
}
.contenido{
    max-width: 1200px;
    width: 100%;
    margin: 40px auto;
    display: flex;
}
.mostrador{
    width: 100%;
    transition: .5s ease;
}
.mostrador .fila{
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
}

.mostrador .fila .item{
    max-width: 210px;
    padding: 30px;
    height: 250px;
    /*border: 2px solid red;*/
    text-align: center;
    margin: 0 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: .3s;
}
.mostrador .fila .item:hover{
    background-color: #e6e6e6;
}
.mostrador .fila .item img{
    width: 100%;
    margin: 30px 0;
}
.mostrador .fila .item .descripcion{
    color: var(--main-color);
    font-weight: bold;
}
.mostrador .fila .item .precio{
    color: #f85151;
    font-weight: bold;
    font-size: 20px;
}
.seleccion{
    transition: .5s ease;
    opacity: 0;
    width: 0%;
    border: 1px solid #ccc;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
}
.cerrar{
    position: absolute;
    right: 0;
    top: 20px;
    right: 20px;
    cursor: pointer;
}

.info{
    padding: 20px;
}
.info img{
    display: block;
    margin: 30px auto;
    width: 80%;
}
.info h2{
    color:var(--main-color);
    margin-bottom: 10px;
}
.info p{
    font-size: 14px;
    color:var(--text-color);
    margin-bottom: 10px;
}
.info .precio{
    font-size: 30px;
    font-weight: bold;
    color: #f85151;
    margin-bottom: 10px;
    display: block;
}
.info .fila{
    display: flex;
    align-items: flex-end;
}
.info .fila label{
    display: block;
    margin-bottom: 10px;
}
.info .fila select{
    width: 100px;
    font-size: 18px;
    padding: 6px;
    margin-right: 30px;
    color: var(--bg-color);
}
.size{
    color:var(--other-color)
}
button {
 position: relative;
 overflow: hidden;
 outline: none;
 cursor: pointer;
 border-radius: 50px;
 background-color: hsl(255deg 50% 40%);
 border: solid 4px hsl(50deg 100% 50%);
 font-family: inherit;
}

.default-btn,.hover-btn {
 background-color: hsl(255deg 50% 40%);
 display: -webkit-box;
 display: -moz-box;
 display: -ms-flexbox;
 display: -webkit-flex;
 display: flex;
 align-items: center;
 gap: 15px;
 padding: 15px 20px;
 border-radius: 50px;
 font-size: 12px;
 font-weight: 500;
 text-transform: uppercase;
 transition: all .3s ease;
}

.hover-btn {
 position: absolute;
 inset: 0;
 background-color: hsl(255deg 50% 49%);
 transform: translate(0%,100%);
}

.default-btn span {
 color: hsl(0, 0%, 100%);
}

.hover-btn span {
 color: hsl(50deg 100% 50%);
}

button:hover .default-btn {
 transform: translate(0%,-100%);
}

button:hover .hover-btn {
 transform: translate(0%,0%);
}


</style>
<script>
    let mostrador = document.getElementById("mostrador");
let seleccion = document.getElementById("seleccion");
let imgSeleccionada = document.getElementById("img");
let modeloSeleccionado = document.getElementById("modelo");
let descripSeleccionada = document.getElementById("descripcion");
let precioSeleccionado = document.getElementById("precio");

function cargar(item){
    quitarBordes();
    mostrador.style.width = "60%";
    seleccion.style.width = "40%";
    seleccion.style.opacity = "1";
    item.style.border = "2px solid red";

    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;

    modeloSeleccionado.innerHTML =  item.getElementsByTagName("p")[0].innerHTML;

    descripSeleccionada.innerHTML = "Descripción del modelo ";

    precioSeleccionado.innerHTML =  item.getElementsByTagName("span")[0].innerHTML;


}
function cerrar(){
    mostrador.style.width = "100%";
    seleccion.style.width = "0%";
    seleccion.style.opacity = "0";
    quitarBordes();
}
function quitarBordes(){
    var items = document.getElementsByClassName("item");
    for(i=0;i <items.length; i++){
        items[i].style.border = "none";
    }
}
</script>
</body>
</html>