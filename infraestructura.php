<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/escudo.ico" type="image/x-icon">
    <title>Colegio Cristiano Elim</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/networks.css">
    <!--Estilo de direccion3D-->
    <link rel="stylesheet" href="./assets/css/desplazamiento.css">        
    <!--Fin del estilo direccion 3D-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    
    <!-- CARROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- CARROUSEL -->
    
</head>

<body>

   

<style>
    #redes {
        position: fixed;
        width: 45px;
        min-width: 45px;
        max-width: 45px;
        top: 50%;
        right: 0;
        transform: translateY(-75%);
        z-index: 99;
    }

    #redes a {
        font-size: 21px;
        color: white;
    }

    
    #valores .flip {
        height: 172px;
        padding: 0.6em;
    }

    #valores .card {
        position: relative;
        width: 97.5%;
        height: 97.5%;
        text-align: center;
        transition: transform 1s;
        transform-style: preserve-3d;
    }

    #valores .flip:nth-child(1):hover .card {
        transform: rotateY(180deg);
    }

    #valores .front,
    #valores .back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        cursor: default;
    }

    #valores .front {
        color: #fff;
        border: 2px solid #ececec;
    }

    #valores .back {
        color: white;
        transform: rotateY(180deg);
        border: 2px solid #ececec;
        padding: 0.5em;
    }

    #niveles img{

      height:100%;
    }

    #niveles #col-niveles1{
      
      padding:2rem;
      margin-left:10px;
      margin-right:10px;                  
      position:relative;
      margin-top:-70px;
      background-color: rgba(167, 201,0, 0.86);
      color: var(--color5);
      font-size:1rem;
      text-align:center;
      font-weight: bold;
    }
    #niveles #col-niveles2{
      padding:2rem;
      margin-left:10px;
      margin-right:10px;                  
      position:relative;
      margin-top:-70px;
      background-color: rgba(255, 207,0, 0.86);
      color: var(--color5);
      font-size:1rem;
      text-align:center;
      font-weight: bold;
    }
    #niveles #col-niveles3{
      
      padding:2rem;
      margin-left:10px;
      margin-right:10px;                  
      position:relative;
      margin-top:-70px;
      background-color: rgba(0, 44,0, 0.86);
      color: var(--color5);
      font-size:1rem;
      text-align:center;
      font-weight: bold;
    }

   
    .button1 {
        background-color: var(--color2); 
        border: none;
        border-radius: 20px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .button2 {
        background-color: var(--color1); 
        border: none;
        border-radius: 20px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .button4 {
        background-color: var(--color3); 
        border: none;
        color: white;    
        text-align: center;
        text-decoration: none;
        display: inline-block;    
        font-size: 2rem; 
        padding: 10px 21px; 
        letter-spacing: 0.5px;    
    }

    .button1:hover{
        background-color: var(--color1);
    }
    span.circulo{
      border-radius: 50%;
      display: inline-block;
      font-size: 15px;
      min-width: 40px;
      height: 40px;
      margin-right: 8px;
      padding: 9px;
      text-align: center;
      width: 40px;
      font-weight: bold;
      background-color: var(--color2);
    }
    
    #titulos-logros{
      color:white;
      font-weight: bold;
      background-color: rgba(255, 207,0, 0.60);
      text-shadow: -1px 2px 0 #0000;
      padding: .75rem;                
      position:relative;
      margin-top:-70px;
    }

      /* -- strcoll -- */
        .scroll {
            overflow-y: auto;
            height: 260px;
        }

        .scroll::-webkit-scrollbar {
            background-color: whitesmoke;
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {
            /* background-color: #a7a7a7; */
            background-color: var(--color1);
        }

        .scroll::-webkit-scrollbar-track {
            width: 5px;
        }
        div.galeria{
            transition: transform .3s ease-in-out;
        }
        div.galeria:hover{
        border: 3px solid var(--color3);
        transform: scale(1.06);
    }

</style>

   
    <?php include_once './includes/header.php'; ?>
    <?php include_once './includes/redes.php'; ?>
    <div class="container-fluid p-0">
        <img src="./assets/img/infraestructura/portada_infraestructura.jpg" width="100%">
    </div>


    <section class="container-fluid">
        <br><br>
        <div class="container">
            <div class="separador">
                  <div class="sep_box"><i class="fas fa-hotel"></i></div>
                    <div class="sep_title">INFRAESTRUCTURA</div>
            </div>
        </div>
        <br><br>

        <div class="container">
        <div class="row justify-content-center pt-3">
                <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card  shadow h-100" >
                            <div class="crop">
                                <img img src="./assets/img/infraestructura/25aulas.jpg" class="w-100" >
                            </div>
                            <div class=" card-body h-100">
                               <h4 class="font-weight-bold mb-3 text-center">25 AULAS</h4>
                                <p class="text-justify line">Donde se desarrollan las actividades académicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card shadow h-100">
                            <div class="crop">
                                <img simg src="./assets/img/infraestructura/loza.jpg" class="w-100">
                            </div>
                            <div class="card-body ">
                               <h4 class="font-weight-bold mb-3 text-center">1 LOZA DEPORTIVA</h4>
                                <p class="text-justify ">Para desarrollar las diferentes actividades físicas y psicomotrices.</p>
                            </div>
                        </div>
                    </div>
                                    <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card shadow h-100">
                            <div class="crop">
                                <img simg src="./assets/img/infraestructura/patio.jpg" class="w-100">
                            </div>
                            <div class="card-body">
                               <h4 class="font-weight-bold mb-3 text-center"> 1 PATIO CENTRAL</h4>
                                <p class="text-justify">Donde se desarrollan las actividades centrales de la institución.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card shadow h-100">
                            <div class="crop">
                                <img simg src="./assets/img/infraestructura/cancha.jpg" class="w-100">
                            </div>
                            <div class="card-body ">
                               <h4 class="font-weight-bold mb-3 text-center">2 CANCHAS DE GRASS SINTÉTICO</h4>
                                <p class="text-justify line">Para desarrollar las diferentes actividades físicas y psicomotrices.</p>
                            </div>
                        </div>
                    </div>
        </div>
        <br><br>
</div>
<div class="container">
            <div class="row justify-content-center pt-3">
                <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card  shadow h-100">
                            <div class="crop">
                                <img img src="./assets/img/infraestructura/auditorio.jpg" class="w-100" >
                            </div>
                            <div class="card-body">
                               <h4 class="font-weight-bold mb-3 text-center">1 AUDITORIO</h4>
                                <p class="text-justify line">Para el desarrollo de la proclamación de la palabra de Dios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card shadow h-100">
                            <div class="crop">
                                <img simg src="./assets/img/infraestructura/computo.jpg" class="w-100">
                            </div>
                            <div class="card-body">
                               <h4 class="font-weight-bold mb-3 text-center">2 SALAS DE COMPUTACIÓN</h4>
                                <p class="text-justify line">Para el desarrollo tecnológico de nuestros estudiantes.</p>
                            </div>
                        </div>
                    </div>
                                    <div class="col-md-3 px-2 mb-4">
                        <div class="galeria card shadow h-100">
                            <div class="crop">
                                <img simg src="./assets/img/infraestructura/laboratorio.jpg" class="w-100">
                            </div>
                            <div class="card-body">
                               <h4 class="font-weight-bold mb-3 text-center"> 1 LABORATORIO</h4>
                                <p class="text-justify line">Para potenciar la indagación e investigación de nuestros estudiantes.</p>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
        <!-- NAV-PILLs , BOOSTRAP
        <div class="container">
            <ul class="nav nav-pills mb-4 flex-column flex-sm-row shadow-sm bg-light" id="pills-tab" role="tablist">
                <li class="nav-item flex-sm-fill" role="presentation">
                    <button class="nav-link w-100 active py-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><b>Nuestras Aulas</b></button>
                </li>
                <li class="nav-item flex-sm-fill" role="presentation">
                    <button class="nav-link w-100 py-3" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages" aria-selected="true"><b>Auditorio</b></button>
                </li>
                
                <li class="nav-item flex-sm-fill" role="presentation">
                    <button class="nav-link w-100 py-3" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Laboratorios</b></button>
                </li>
                
                <li class="nav-item flex-sm-fill" role="presentation">
                    <button class="nav-link w-100 py-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Deporte</b></button>
                </li>
            </ul>
            <div class="tab-content pt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div id="carouselProyecto1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner shadow-sm rounded">
                            <div class="carousel-item active">
                                <img src="./assets/img/infraestructura/25aulas.jpg" class="d-block w-100" height="610" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-flex justify-content-around py-2 rounded fw-bold" style="background: rgba(0, 0, 0, .5);">
                                        <span>25 AULAS (DONDE SE DESARROLLA LAS ACTIVIDADES ACADÉMICAS) </span>
                                       
                                    </div>
                                </div>
                            </div>
                            
                                                       
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                    <div id="carouselProyecto1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner shadow-sm rounded">
                            <div class="carousel-item active">
                                <img src="./assets/img/infraestructura/auditorio.jpg" class="d-block w-100" height="610" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-flex justify-content-around py-2 rounded fw-bold" style="background: rgba(0, 0, 0, .5);">
                                        <span>1 AUDITORIO (PARA EL DESARROLLO DE LAS PROCLAMACIÓN DE LA PALABRA DE DIOS) </span>
                                       
                                    </div>
                                </div>
                            </div>
                            
                                                       
                        </div>
                        
                    </div>
                </div>
                
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div id="carouselProyecto2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner shadow-sm rounded">
                            <div class="carousel-item active">
                                <img src="./assets/img/infraestructura/laboratorio.jpg" class="d-block w-100" height="610" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-flex justify-content-around py-2 rounded fw-bold" style="background: rgba(0, 0, 0, .5);">
                                        <span>2 SALAS DE COMPUTACIÓN (PARA EL DESARROLLO TECNOLÓGICO DE NUESTROS ESTUDIANTES)</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/infraestructura/laboratorio.jpg" class="d-block w-100" height="610" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-flex justify-content-around py-2 rounded fw-bold" style="background: rgba(0, 0, 0, .5);">
                                    <span>1 LABORATORIO (PARA POTENCIAR LA INDAGACIÓN E INVESTIGACIÓN DE NUESTROS ESTUDIANTES) </span>
                                        
                                    </div>
                                </div>
                            </div>
                                                        
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProyecto2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProyecto2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div id="carouselProyecto3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner shadow-sm rounded">
                            <div class="carousel-item active">
                                <img src="./assets/img/infraestructura/cancha.jpg" class="d-block w-100" height="610" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-flex justify-content-around py-2 rounded fw-bold" style="background: rgba(0, 0, 0, .5);">
                                    <span>2 CANCHAS DE GRASS SINTÉTICO (PARA EL DESARROLLO DE LA RECREACIÓN DE NUESTROS ESTUDIANTES)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/infraestructura/loza.jpg" class="d-block w-100" height="610" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-flex justify-content-around py-2 rounded fw-bold" style="background: rgba(0, 0, 0, .5);">
                                        <span>1 LOZA DEPORTIVA (PARA DESARROLLAR LAS DIFERENTES ACTIVIDADES FÍSICAS Y PSICOMOTRICES)</span>
                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProyecto3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProyecto3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>-->
</section>
    <br><br><br>
  

    <?php include_once './includes/footer.php'; ?>


    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.pooper.js"></script>
    

</body>

</html>