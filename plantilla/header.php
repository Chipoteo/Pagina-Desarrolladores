<style>
    body {
    background-color: #2A2420;
    
}
h1 {
    text-align: center;
    color: white;
}
h4 {
    font-size: 16px;
    font-weight: 700;
}
header {
    padding: 20px 0 0 0;
    text-align: center;
    background-color: #543311;
}
.navct {
    color: white;
    padding-top: 5px;
    text-transform: uppercase;
   
}

.navct a {
    color: white;
    text-decoration: none;
}

@media (min-width: 750px) {
    header {
        text-align: left;
    }
}

ul {
    list-style: none;
}
#hero {
    background-image: url(../img/bgimage1.jpg);
    position:relative;
    z-index: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 700px;
}
#hero::before{
    content: "";
    background: rgba(0, 0, 0, 0.45);
    position: absolute;
    top: 0; 
    min-height: 100%;
    left: 0;
    right: 0;
    z-index: -1;
}

#encabezado {
    margin: 30px 0;
}
.submenu {
    position: relative;
}

.submenu #carrito {
    display: none;
}

.submenu:hover #carrito {
    display: block;
    position: absolute;
    right: 0;
    color: white;
    top: 100%;
    z-index: 1;
    background-color: #2A2420;
    padding: 20px;
    min-height: 400px;
    min-width: 300px;
}

.vacio {
    padding: 10px;
    background-color: crimson;
    text-align: center;
    border-radius: 10px;
    color:white
}

.contenido-hero {
    padding-top: 120px;
    margin-top: 80px;
    color: white;
}

.contenido-hero form {
    position: relative;
    margin-bottom: 0;
}

.contenido-hero form #buscador {
    height: 50px;
    margin-bottom: 0;
}

.contenido-hero form .submit-buscador {
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    padding: 0;
    display: block;
    text-indent: -9999px;
    width: 50px;
    background-image: url(../img/lupa.png);
    background-position: right center;
    background-repeat: no-repeat;
    border: none;
}

.barra {
    padding: 20px 0;
    background: #543311;
}

.barra p {
    margin: 0;
    color: white;
}
.icono{
    background-repeat: no-repeat;
    background-position: left center;
    padding-left: 60px;
    background-size: 30px;
    margin-bottom: 40px;
    text-align: center;
}

@media (min-width: 750px) {
    .icono {
        margin-bottom: 0;
    }
}

.icono1 {
    background-image: url(../img/icono1.png);
}
.icono2 {
    background-image: url(../img/icono2.png);
}
.icono3 {
    background-image: url(../img/icono3.png);
}

#lista-cafe .row {
    margin-bottom: 20px;
}
.agregar-carrito {
    margin: 10px 0;
}

.card {
    text-align: center;
    box-shadow: 0 25px 98px 0 rgb(0 0 0 / 3%);
    background: #362D27;
}
@media (min-width: 550px) {
    .card {
        text-align: left;
    }
}
.info-card {
    padding: 10px 20px;
    color: white;
}

.info-card p,
.card h4 {
    margin-bottom: 5px;
}

.info-card .precio {
    text-decoration: line-through;
    font-size: 18px;
    margin-top: 10px;
}

.info-card .precio span {
    font-weight: 700;
    font-size: 22px;
}

.footer {
    border-top: 1px solid white;
    margin-top: 40px;
    padding-top: 40px;
}

.footer .menu a {
    display: block;
    color: white;
    margin-bottom: 10px;
    text-decoration: none;
}

.h2{
    margin-top: -20%;
}

.tablas{
    margin-top: 10%;
}

.row1{
    margin-top: 40px;
}

.row2{
    margin-top: -29.3%;
}

.cardM{
    margin-left: 20%;
    padding-top: 20px;
    height: 400px;
    color: white;
}

.cardW{
    margin-left: 120%;
    color: white;
}

.all{
    margin-top: -120px;
}

</style>

<div id="home" class="all">
<div id="hero"  style="background-image: url('img/bgimage1.jpg')">
<div class="tablas">
<div class="container text-center">
  <div class="row1">
    <div class="col-6">

        <div class="cardM">
        <div class="card" style="width: 18rem;">
            <img src="img/LogoMat.png" class="card-img-top" alt="logo_mat">
        <div class="card-body">
            <h1 class="card-text">Mateo Rada</h1>
            <p class="card-text">Soy Mateo Rada Vasquez, tengo 16 años y nací em Colombia/Bogotá, desde pequeño
                me ha interesado los videjuegos y la programacion de estos mismos, me
                encuentro cursando el grado 10° en el colegio I.T.D Julio Florez.
            </p>
        </div>
    </div>
    </div>
    </div>
  </div>
  <div class="row2">
    <div class="col-6">
        
    <div class="cardW">
        <div class="card" style="width: 18rem;">
            <img src="img/LogoWil.jpeg" class="card-img-top" alt="logo_will">
        <div class="card-body">
            <h1 class="car-text">Wilder Vente</h1>
            <p class="card-text">Soy wilder tengo 17 nací en cali valle, me gusta el baloncesto y mis pasatiempos
                son tiempo pasar con mis familiares y amigos, me gusta mucho la programación y a tecnología.
                A su vez estoy estudiando 10° en colegio I.T.D Julio Florez.</p>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

                    